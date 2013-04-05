<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package   carouFredSel 
 * @author    Dirk Klemmt 
 * @license   MIT/GPL 
 * @copyright Dirk Klemmt 2012-2013 
 */


/**
 * Namespace
 */
namespace Dirch\carouFredSel;


/**
 * Class ContentCarouFredSelGallery
 *
 * Front end content element "caroufredsel_gallery".
 *
 * @copyright  Dirk Klemmt 2012-2013
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class ContentCarouFredSelGallery extends \ContentElement
{
	/**
	 * Files object
	 * @var \FilesModel
	 */
	protected $objFiles;


	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_caroufredsel';


	/**
	 * Template
	 * @var string
	 */
	protected $strTemplateGallery = 'caroufredsel_gallery';


	/**
	 * Return if there are no files
	 *
	 * @return string
	 */
	public function generate()
	{
		$this->multiSRC = deserialize($this->dk_cfsMultiSRC);

		// Return if there are no files
		if (!is_array($this->multiSRC) || empty($this->multiSRC))
		{
			return '';
		}

		// Get the file entries from the database
		$this->objFiles = \FilesModel::findMultipleByIds($this->multiSRC);

		if ($this->objFiles === null)
		{
			return '';
		}

		// replace default (HTML) template with chosen one
		if ($this->dk_cfsHtmlTpl)
		{
			$this->strTemplate = $this->dk_cfsHtmlTpl;
		}

		return parent::generate();
	}


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		global $objPage;

		$images = array();
		$auxDate = array();
		$auxId = array();
		$objFiles = $this->objFiles;

		$carouFredSel = new CarouFredSel();

		// Get all images
		while ($objFiles->next())
		{
			// Continue if the files has been processed or does not exist
			if (isset($images[$objFiles->path]) || !file_exists(TL_ROOT . '/' . $objFiles->path))
			{
				continue;
			}

			// Single files
			if ($objFiles->type == 'file')
			{
				$objFile = new \File($objFiles->path, true);

				if (!$objFile->isGdImage)
				{
					continue;
				}

				$arrMeta = $this->getMetaData($objFiles->meta, $objPage->language);

				// Use the file name as title if none is given
				if ($arrMeta['title'] == '')
				{
					$arrMeta['title'] = specialchars(str_replace('_', ' ', preg_replace('/^[0-9]+_/', '', $objFile->filename)));
				}

				// Add the image
				$images[$objFiles->path] = array
				(
					'id'        => $objFiles->id,
					'name'      => $objFile->basename,
					'singleSRC' => $objFiles->path,
					'alt'       => $arrMeta['title'],
					'imageUrl'  => $arrMeta['link'],
					'caption'   => $arrMeta['caption']
				);

				$auxDate[] = $objFile->mtime;
				$auxId[] = $objFiles->id;
			}

			// Folders
			else
			{
				$objSubfiles = \FilesModel::findByPid($objFiles->id);

				if ($objSubfiles === null)
				{
					continue;
				}

				while ($objSubfiles->next())
				{
					// Skip subfolders
					if ($objSubfiles->type == 'folder')
					{
						continue;
					}

					$objFile = new \File($objSubfiles->path, true);

					if (!$objFile->isGdImage)
					{
						continue;
					}

					$arrMeta = $this->getMetaData($objSubfiles->meta, $objPage->language);

					// Use the file name as title if none is given
					if ($arrMeta['title'] == '')
					{
						$arrMeta['title'] = specialchars(str_replace('_', ' ', preg_replace('/^[0-9]+_/', '', $objFile->filename)));
					}

					// Add the image
					$images[$objSubfiles->path] = array
					(
						'id'        => $objSubfiles->id,
						'name'      => $objFile->basename,
						'singleSRC' => $objSubfiles->path,
						'alt'       => $arrMeta['title'],
						'imageUrl'  => $arrMeta['link'],
						'caption'   => $arrMeta['caption']
					);

					$auxDate[] = $objFile->mtime;
					$auxId[] = $objSubfiles->id;
				}
			}
		}

		// Sort array
		switch ($this->dk_cfsSortBy)
		{
			default:
			case 'name_asc':
				uksort($images, 'basename_natcasecmp');
				break;

			case 'name_desc':
				uksort($images, 'basename_natcasercmp');
				break;

			case 'date_asc':
				array_multisort($images, SORT_NUMERIC, $auxDate, SORT_ASC);
				break;

			case 'date_desc':
				array_multisort($images, SORT_NUMERIC, $auxDate, SORT_DESC);
				break;

			case 'meta': // Backwards compatibility
			case 'custom':
				if ($this->orderSRC != '')
				{
					// Turn the order string into an array and remove all values
					$arrOrder = explode(',', $this->orderSRC);
					$arrOrder = array_flip(array_map('intval', $arrOrder));
					$arrOrder = array_map(function(){}, $arrOrder);

					// Move the matching elements to their position in $arrOrder
					foreach ($images as $k=>$v)
					{
						if (array_key_exists($v['id'], $arrOrder))
						{
							$arrOrder[$v['id']] = $v;
							unset($images[$k]);
						}
					}

					// Append the left-over images at the end
					if (!empty($images))
					{
						$arrOrder = array_merge($arrOrder, array_values($images));
					}

					// Remove empty (unreplaced) entries
					$images = array_filter($arrOrder);
					unset($arrOrder);
				}
				break;

			case 'random':
				shuffle($images);
				break;
		}

		$images = array_values($images);

		// Limit the total number of items
		if ($this->dk_cfsNumberOfItems > 0)
		{
			$images = array_slice($images, 0, $this->dk_cfsNumberOfItems);
		}

		$intMaxWidth = (TL_MODE == 'BE') ? 640 : $GLOBALS['TL_CONFIG']['maxImageWidth'];
		$intMaxImageWidth = 0;
		$intMaxImageHeight = 0;
		$strLightboxId = 'lightbox[lb' . $this->id . ']';
		$body = array();
		$bodyThumbnails = array();

		// create images and thumbails
		for ($i = 0; $i < count($images); $i++)
		{
			if ($this->dk_cfsUseThumbnails)
			{
				$thumbnails[$i] = $images[$i];
			}

			$objCell = new \stdClass();

			// Add size
			$images[$i]['size'] = $this->dk_cfsImageSize;
			$images[$i]['fullsize'] = $this->dk_cfsFullsize;

			$this->addImageToTemplate($objCell, $images[$i], $intMaxWidth, $strLightboxId);
			$body[$i] = $objCell;

			// get max image width/height for thumbnails if the extension has to calculate the quantity
			if ($this->dk_cfsUseThumbnails && $this->dk_cfsThumbnailsVisibleSelect == "fixed")
			{
				if ($body[$i]->width > $intMaxImageWidth)
				{
					$intMaxImageWidth = $body[$i]->width;
				}
				if ($body[$i]->height > $intMaxImageHeight)
				{
					$intMaxImageHeight = $body[$i]->height;
				}
			}
		}
//		echo "<pre>"; print_r($images); echo "</pre>"; 

		// create thumbnails
		if ($this->dk_cfsUseThumbnails)
		{
			// calculate max image sizes
			if ($this->dk_cfsThumbnailsVisibleSelect == "fixed")
			{
//		echo "<pre>"; print_r(deserialize($this->dk_cfsThumbnailSize)); echo "</pre>"; 
			}
			else
			{
				$thumbnailSize = $this->dk_cfsThumbnailSize;
			}
		
			for ($i = 0; $i < count($images); $i++)
			{
				$objThumbnail = new \stdClass();
				$thumbnails[$i]['size'] = $thumbnailSize;

				$this->addImageToTemplate($objThumbnail, $thumbnails[$i]);
				$bodyThumbnails[$i] = $objThumbnail;
			}
		}

//		echo "<pre>"; print_r($thumbnails); echo "</pre>"; 

		// --- create FE template for gallery
/*		if (TL_MODE == 'FE' && $this->dk_cfsGalleryTpl != '')
		{
			$this->strTemplateGallery = $this->dk_cfsGalleryTpl;
		}*/

		$objTemplate = new \FrontendTemplate($this->strTemplateGallery);
		$objTemplate->setData($this->arrData);
		$objTemplate->body = $body;
//		$objTemplate->headline = $this->headline; // see #1603

		$this->Template->images = $objTemplate->parse();

		// --- create FE template for thumbnails
		if ($this->dk_cfsUseThumbnails)
		{
			$objTemplateThumbnails = new \FrontendTemplate("caroufredsel_thumbnails");
			$objTemplateThumbnails->id = $this->id;
			$objTemplateThumbnails->thumbnailsVisibleSelect = $this->dk_cfsThumbnailsVisibleSelect;
			$objTemplateThumbnails->bodyThumbnails = $bodyThumbnails;

			$this->Template->thumbnails = $objTemplateThumbnails->parse();
		}

		// --- create FE template for CSS
		$objTemplateCss = new \FrontendTemplate($this->dk_cfsCssTpl);
		$objTemplateCss->id = $this->id;

		// --- create FE template for javascript caller
		$objTemplateJs = new \FrontendTemplate($this->dk_cfsJsTpl);
	
		// (unique) Element id will be used for unique HTML id element
		$objTemplateJs->id = $this->id;
		if ($this->dk_cfsUseThumbnails)
		{
			$this->Template->useThumbnails =
			$objTemplateCss->useThumbnails =
			$objTemplateJs->useThumbnails = $this->dk_cfsUseThumbnails;
		}
		if ($this->dk_cfsSynchronise != '')
		{
			$objTemplateJs->synchronise = $this->dk_cfsSynchronise;
		}

		$carouFredSel->createTemplateData($this->dk_cfsCarouFredSel, $this->type, $this->Template, $objTemplateCss, $objTemplateJs);
	}
}

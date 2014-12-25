<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2015 Leo Feyer
 * 
 * @package   carouFredSel
 * @author    Dirk Klemmt
 * @license   MIT/GPL
 * @copyright Dirk Klemmt 2012-2015
 */


/**
 * Namespace
 */
namespace Dirch\carouFredSel;


/**
 * Class ModuleCarouFredSelGallery
 *
 * Front end modul "caroufredsel_gallery".
 *
 * @copyright  Dirk Klemmt 2012-2015
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class ModuleCarouFredSelGallery extends \Module
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
	protected $strTemplate = 'mod_caroufredsel';


	/**
	 * CSS Template
	 * @var string
	 */
	protected $strTemplateCss = 'css_caroufredsel';


	/**
	 * JS Template
	 * @var string
	 */
	protected $strTemplateJs = 'js_caroufredsel';


	/**
	 * Gallery Template
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
		if (TL_MODE == 'BE')
		{
			// --- create BE template for carouFredSel gallery module
			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### CAROUFREDSEL GALLERY MODULE ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		$this->multiSRC = deserialize($this->dk_cfsMultiSRC);

		// Return if there are no files
		if (!is_array($this->multiSRC) || empty($this->multiSRC))
		{
			return '';
		}

		// Get the file entries from the database
		$this->objFiles = \FilesModel::findMultipleByUuids($this->multiSRC);

		if ($this->objFiles === null)
		{
			return '';
		}

		// replace default (HTML) template with chosen one
		if ($this->dk_cfsHtmlTpl)
		{
			$this->strTemplate = $this->dk_cfsHtmlTpl;
		}

		// replace default (CSS) template with chosen one
		if ($this->dk_cfsCssTpl)
		{
			$this->strTemplateCss = $this->dk_cfsCssTpl;
		}

		// replace default (JS) template with chosen one
		if ($this->dk_cfsJsTpl)
		{
			$this->strTemplateJs = $this->dk_cfsJsTpl;
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
		$objFiles = $this->objFiles;

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
					$arrMeta['title'] = specialchars(str_replace('_', ' ', $objFile->filename));
				}

				// Add the image
				$images[$objFiles->path] = array
				(
					'id'        => $objFiles->id,
					'uuid'      => $objFiles->uuid,
					'name'      => $objFile->basename,
					'singleSRC' => $objFiles->path,
					'alt'       => $arrMeta['title'],
					'imageUrl'  => $arrMeta['link'],
					'caption'   => $arrMeta['caption']
				);

				$auxDate[] = $objFile->mtime;
			}

			// Folders
			else
			{
				$objSubfiles = \FilesModel::findByPid($objFiles->uuid);

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
						$arrMeta['title'] = specialchars(str_replace('_', ' ', $objFile->filename));
					}

					// Add the image
					$images[$objSubfiles->path] = array
					(
						'id'        => $objSubfiles->id,
						'uuid'      => $objSubfiles->uuid,
						'name'      => $objFile->basename,
						'singleSRC' => $objSubfiles->path,
						'alt'       => $arrMeta['title'],
						'imageUrl'  => $arrMeta['link'],
						'caption'   => $arrMeta['caption']
					);

					$auxDate[] = $objFile->mtime;
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
					$tmp = deserialize($this->orderSRC);

					if (!empty($tmp) && is_array($tmp))
					{
						// Remove all values
						$arrOrder = array_map(function(){}, array_flip($tmp));

						// Move the matching elements to their position in $arrOrder
						foreach ($images as $k=>$v)
						{
							if (array_key_exists($v['uuid'], $arrOrder))
							{
								$arrOrder[$v['uuid']] = $v;
								unset($images[$k]);
							}
						}

						// Append the left-over images at the end
						if (!empty($images))
						{
							$arrOrder = array_merge($arrOrder, array_values($images));
						}

						// Remove empty (unreplaced) entries
						$images = array_values(array_filter($arrOrder));
						unset($arrOrder);
					}
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

		// create thumbnails
		if ($this->dk_cfsUseThumbnails)
		{
			// calculate max image sizes
			if ($this->dk_cfsThumbnailsVisibleSelect == "fixed")
			{
				$thumbnailSize = array('', '', 'center_center');
				for ($i = 0; $i < count($images); $i++)
				{
					$objThumbnail = new \stdClass();

					// As the thumbnails carousel should have the same width/height as the main one we have
					// to calculate the width/height for each thumbnail. As we have to round the width/height
					// to an integer we spread the "rounding error" among all thumbnails
					if ($this->dk_cfsThumbnailsPosition == 'left' || $this->dk_cfsThumbnailsPosition == 'right')
					{
						if ($i % 2)
						{
							$intThumbnailImageHeight = floor($intMaxImageHeight / $this->dk_cfsThumbnailsVisible);
						}
						else
						{
							$intThumbnailImageHeight = ceil($intMaxImageHeight / $this->dk_cfsThumbnailsVisible);
						}
						if (isset($thumbnailWidth) && $thumbnailWidth > 0)
						{
							$thumbnailSize[0] = $thumbnailWidth;
						}
						$thumbnailSize[1] = $intThumbnailImageHeight;
					}
					else
					{
						if ($i % 2)
						{
							$intThumbnailImageWidth = floor($intMaxImageWidth / $this->dk_cfsThumbnailsVisible);
						}
						else
						{
							$intThumbnailImageWidth = ceil($intMaxImageWidth / $this->dk_cfsThumbnailsVisible);
						}
						if (isset($thumbnailHeight) && $thumbnailHeight > 0)
						{
							$thumbnailSize[1] = $thumbnailHeight;
						}
						$thumbnailSize[0] = $intThumbnailImageWidth;
					}
					
					$thumbnails[$i]['size'] = $thumbnailSize;
	
					$this->addImageToTemplate($objThumbnail, $thumbnails[$i]);
					$bodyThumbnails[$i] = $objThumbnail;
					if ($i == 0)
					{
						$thumbnailWidth = $bodyThumbnails[$i]->arrSize[0];
						$thumbnailHeight = $bodyThumbnails[$i]->arrSize[1];
					}
				}
				$thumbnailSize = serialize($thumbnailSize);
			}
			else
			{
				for ($i = 0; $i < count($images); $i++)
				{
					$objThumbnail = new \stdClass();
					$thumbnails[$i]['size'] = $this->dk_cfsThumbnailSize;
	
					$this->addImageToTemplate($objThumbnail, $thumbnails[$i]);
					$bodyThumbnails[$i] = $objThumbnail;
					if ($i == 0)
					{
						$thumbnailWidth = $bodyThumbnails[$i]->arrSize[0];
						$thumbnailHeight = $bodyThumbnails[$i]->arrSize[1];
					}
				}
			}
		}


		// --- create FE template for gallery
/*		if (TL_MODE == 'FE' && $this->dk_cfsGalleryTpl != '')
		{
			$this->strTemplateGallery = $this->dk_cfsGalleryTpl;
		}*/

		$objTemplate = new \FrontendTemplate($this->strTemplateGallery);
		$objTemplate->setData($this->arrData);
		$objTemplate->body = $body;

		$this->Template->images = $objTemplate->parse();

		// --- create FE template for thumbnails
		if ($this->dk_cfsUseThumbnails)
		{
			$objTemplateThumbnails = new \FrontendTemplate("caroufredsel_thumbnails");
			$objTemplateThumbnails->id = $this->id;
			$objTemplateThumbnails->bodyThumbnails = $bodyThumbnails;

			$this->Template->thumbnails = $objTemplateThumbnails->parse();
		}

		// --- create FE template for CSS
		$objTemplateCss = new \FrontendTemplate($this->strTemplateCss);
		$objTemplateCss->id = $this->id;

		// --- create FE template for javascript caller
		$objTemplateJs = new \FrontendTemplate($this->strTemplateJs);
	
		// (unique) Element id will be used for unique HTML id element
		$objTemplateJs->id = $this->id;
		if ($this->dk_cfsUseThumbnails)
		{
			$this->Template->useThumbnails =
			$objTemplateCss->useThumbnails =
			$objTemplateJs->useThumbnails = $this->dk_cfsUseThumbnails;

			if (isset($this->dk_cfsThumbnailsVisibleSelect))
			{
				$this->Template->thumbnailsVisibleSelect =
				$objTemplateCss->thumbnailsVisibleSelect =
				$objTemplateJs->thumbnailsVisibleSelect = $this->dk_cfsThumbnailsVisibleSelect;
			}
			if ($this->dk_cfsThumbnailsVisibleSelect == "fixed")
			{
				$objTemplateJs->thumbnailsVisible = $this->dk_cfsThumbnailsVisible;
			}
/*			$objTemplateJs->thumbnailWidth = $thumbnailWidth;
			$objTemplateJs->thumbnailHeight = $thumbnailHeight;*/

			$this->Template->thumbnailsPosition =
			$objTemplateCss->thumbnailsPosition =
			$objTemplateJs->thumbnailsPosition = $this->dk_cfsThumbnailsPosition;

			if ($this->dk_cfsThumbnailsAlign != 'center')
			{
				$objTemplateJs->thumbnailsAlign = 'align: "' . $this->dk_cfsThumbnailsAlign . '"';
			}

			$thumbnailsWidth = unserialize($this->dk_cfsThumbnailsWidth);
			if (isset($thumbnailsWidth['value']) && $thumbnailsWidth['value'] != '')
			{
				switch ($thumbnailsWidth['unit'])
				{
					case 'px':
						$objTemplateCss->thumbnailsWidth = 'width: ' . $thumbnailsWidth['value'] . $thumbnailsWidth['unit'] . ';';
						$objTemplateJs->thumbnailsWidth = 'width: ' . $thumbnailsWidth['value'];
						break;
		
					case '%':
						$objTemplateCss->thumbnailsWidth = 'width: ' . $thumbnailsWidth['value'] . $thumbnailsWidth['unit'] . ';';
						$objTemplateJs->thumbnailsWidth = sprintf('width: "%s%s"', $thumbnailsWidth['value'], $thumbnailsWidth['unit']);
						break;
				}
			}

			$thumbnailsHeight = unserialize($this->dk_cfsThumbnailsHeight);
			if (isset($thumbnailsHeight['value']) && $thumbnailsHeight['value'] != '')
			{
				switch ($thumbnailsHeight['unit'])
				{
					case 'px':
						$objTemplateCss->thumbnailsHeight = 'height: ' . $thumbnailsHeight['value'] . $thumbnailsHeight['unit'] . ';';
						$objTemplateJs->thumbnailsHeight = 'height: ' . $thumbnailsHeight['value'];
						break;
	
					case '%':
						$objTemplateCss->thumbnailsHeight = 'height: ' . $thumbnailsHeight['value'] . $thumbnailsHeight['unit'] . ';';
						$objTemplateJs->thumbnailsHeight = sprintf('height: "%s%s"', $thumbnailsHeight['value'], $thumbnailsHeight['unit']);
						break;
				}
			}
		}
		if ($this->dk_cfsSynchronise != '')
		{
			$objTemplateJs->synchronise = $this->dk_cfsSynchronise;
		}

		$carouFredSel = new CarouFredSel();
		$carouFredSel->createTemplateData($this->dk_cfsCarouFredSel, $this->type, $this->Template, $objTemplateCss, $objTemplateJs);
	}
}

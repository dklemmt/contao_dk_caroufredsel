<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package   carouFredSel 
 * @author    Dirk Klemmt 
 * @license   MIT/GPL 
 * @copyright Dirk Klemmt 2012 
 */


/**
 * Namespace
 */
namespace Dirch\carouFredSel;


/**
 * Class ContentCarouFredSel 
 *
 * @copyright  Dirk Klemmt 2012 
 * @author     Dirk Klemmt 
 * @package    carouFredSel
 */
class ContentCarouFredSel extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_caroufredsel';


	/**
	 * Display a wildcard in the back end
	 *
	 * @param boolean
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			// --- create BE template for carouFredSel element
			$this->Template = new \BackendTemplate('be_wildcard');
    		$this->Template->wildcard = '### CAROUFREDSEL WRAPPER ' . ($this->dk_cfsType == 'dk_cfsStart' ? 'START' : 'STOP') . ' ###';

			return $this->Template->parse();
		}

		return parent::generate();
	}
	

	/**
	 * Generate the module
	 */
	protected function compile()
	{
		if (TL_MODE == 'FE')
		{
			if ($this->dk_cfsType == 'dk_cfsStop')
			{
				// --- create FE template for carouFredSel stop element using same template as start element

				// search for first visible carouFredSel start element with a position before end element
				$objStartElement = \Database::getInstance()
					->prepare("SELECT id, dk_cfsCarouFredSel, dk_cfsHtmlTpl
							   FROM tl_content
							   WHERE pid = ? AND type = ? AND dk_cfsType = ? AND sorting < ? AND invisible != '1'
							   ORDER by sorting DESC")
					->limit(1)
					->execute($this->pid, 'caroufredsel', 'dk_cfsStart', $this->sorting);

				if ($objStartElement->numRows < 1)
				{
					$this->log('carouFredSel start element is missing!', 'ContentCarouFredSel compile()', TL_ERROR);
					return;
				}

				$objCfsElement = \Database::getInstance()
					->prepare("SELECT autoProgress, navigation, autoButton, pagination
							   FROM tl_dk_caroufredsel
							   WHERE id = ? AND useNavigation = '1'")
					->limit(1)
					->execute($objStartElement->dk_cfsCarouFredSel);
			}

/*			if ($this->dk_cfsType == 'dk_cfsStart')
			{*/
				/*
				 * search for first visible carouFredSel stop element with a
				 * position after visible start element (sorting>$this->sorting)
				 */
/*				$objStopElement = $this->Database->prepare("SELECT sorting " .
														   "FROM tl_content " .
														   "WHERE pid = ? AND type = ? AND dk_cfsType = ? AND sorting > ? AND invisible != 1 " .
														   "ORDER by sorting ASC")
													->limit(1)
													->execute($this->pid, 'dk_cfs', 'dk_cfsStop', $this->sorting);

				if ($objStopElement->numRows < 1)
				{
					$this->log('carouFredSel stop element is missing!', 'ContentCarouFredSel compile()', TL_ERROR);
//					return;
// todo: maybe error handling but stop element shouldn't be missing!
				}
*/
//echo $objStopElement->sorting . '<br />';

				/*
				 * get every Content Element between carouFredSel start and
				 * stop elements
				 */
/*				$objContentElements = $this->Database->prepare("SELECT id, type " .
															   "FROM tl_content " .
															   "WHERE pid = ? AND invisible != 1 AND sorting > ? AND sorting < ? " .
															   "ORDER by sorting ASC")
													->execute($this->pid, $this->sorting, $objStopElement->sorting);
*/
/*			}*/

			// --- create FE template for carouFredSel element
			$this->Template = new \FrontendTemplate(($this->dk_cfsType == 'dk_cfsStart' ? $this->dk_cfsHtmlTpl : $objStartElement->dk_cfsHtmlTpl));

			$this->Template->dk_cfsType = $this->dk_cfsType;
			$this->Template->id = ($this->dk_cfsType == 'dk_cfsStart' ? $this->id : $objStartElement->id);

			if ($this->dk_cfsType == 'dk_cfsStop' && $objCfsElement->numRows)
			{
				$this->Template->autoProgress = $objCfsElement->autoProgress;
				$this->Template->navigation = $objCfsElement->navigation;
				$this->Template->autoButton = $objCfsElement->autoButton;
				$this->Template->pagination = $objCfsElement->pagination;
			}

			if ($this->dk_cfsType == 'dk_cfsStart')
			{
				// --- create FE template for css
				$objTemplateCss = new \FrontendTemplate($this->dk_cfsCssTpl);
				$objTemplateCss->id = $this->id;

				// --- create FE template for javascript caller
				$objTemplateJs = new \FrontendTemplate($this->dk_cfsJsTpl);
	
				// (unique) Element id will be used for unique HTML id element
				$objTemplateJs->id = $this->id;
	
				$carouFredSel = new CarouFredSel();
				$carouFredSel->createTemplateData($this->dk_cfsCarouFredSel, $this->Template, $objTemplateCss, $objTemplateJs);
			}
		}
	}
}

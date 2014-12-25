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
 * Class ContentCarouFredSelStop 
 *
 * Front end content element "caroufredsel_stop" (wrapper stop).
 * @copyright  Dirk Klemmt 2012-2015
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class ContentCarouFredSelStop extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_caroufredsel';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		if (TL_MODE == 'FE')
		{
			// --- create FE template for carouFredSel stop element using same template as start element

			// search for first visible carouFredSel start element with a position before end element
			$objStartElement = \Database::getInstance()
				->prepare("SELECT id, dk_cfsCarouFredSel, dk_cfsHtmlTpl
						   FROM   tl_content
						   WHERE  type = 'caroufredsel_start' AND pid = ? AND sorting < ? AND invisible != '1'
						   ORDER  by sorting DESC")
				->limit(1)
				->execute($this->pid, $this->sorting);

			if ($objStartElement->numRows < 1)
			{
				$this->log('carouFredSel start element is missing!', 'ContentCarouFredSelStop compile()', TL_ERROR);
				return;
			}

			// replace default (HTML) template with the one from carouFredSel start element
			if (isset($objStartElement->dk_cfsHtmlTpl) && $objStartElement->dk_cfsHtmlTpl != '')
			{
				$this->strTemplate = $objStartElement->dk_cfsHtmlTpl;
			}

			// --- create FE template for carouFredSel element
			$this->Template = new \FrontendTemplate($this->strTemplate);
			$this->Template->type = $this->type;
			$this->Template->id = $objStartElement->id;

			$carouFredSel = new CarouFredSel();
			$carouFredSel->createTemplateDataStopElement($objStartElement->dk_cfsCarouFredSel, $this->Template);
		}
		else
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
		}
	}
}

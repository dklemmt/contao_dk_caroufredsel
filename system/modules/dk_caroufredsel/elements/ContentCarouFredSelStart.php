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
 * Class ContentCarouFredSelStart
 *
 * Front end content element "caroufredsel_start" (wrapper start).
 * @copyright  Dirk Klemmt 2012-2015
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class ContentCarouFredSelStart extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_caroufredsel';


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
	 * @return string
	 */
	public function generate()
	{
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
		if (TL_MODE == 'FE')
		{
			// --- create FE template for carouFredSel element
			$this->Template = new \FrontendTemplate($this->strTemplate);
			$this->Template->setData($this->arrData);
			$this->Template->id = $this->id;

			// --- create FE template for CSS
			$objTemplateCss = new \FrontendTemplate($this->strTemplateCss);
			$objTemplateCss->id = $this->id;
			$objTemplateCss->cssIDOnly = $this->cssID[0];

			// --- create FE template for javascript caller
			$objTemplateJs = new \FrontendTemplate($this->strTemplateJs);
			$objTemplateJs->id = $this->id;
			if (isset($this->dk_cfsSynchronise) && $this->dk_cfsSynchronise != '')
			{
				$objTemplateJs->synchronise = $this->dk_cfsSynchronise;
			}

			$carouFredSel = new CarouFredSel();
			$carouFredSel->createTemplateData($this->dk_cfsCarouFredSel, $this->type, $this->Template, $objTemplateCss, $objTemplateJs);
		}
		else
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
			$this->Template->title = $this->headline;
		}
	}
}

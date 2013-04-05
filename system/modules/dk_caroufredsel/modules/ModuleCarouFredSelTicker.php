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
 * Class ModuleCarouFredSelTicker
 *
 * @copyright  Dirk Klemmt 2012-2013
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class ModuleCarouFredSelTicker extends \ModuleNewsList
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_caroufredsel_ticker';


	/**
	 * Display a wildcard in the back end
	 *
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			// --- create BE template for carouFredSel newsticker module
			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### CAROUFREDSEL NEWSTICKER ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id . '&amp;rt=' . REQUEST_TOKEN;

			return $objTemplate->parse();
		}

		// replace default (HTML) template with chosen one
		if ($this->dk_cfsHtmlTpl)
		{
			$this->strTemplate = $this->dk_cfsHtmlTpl;
		}

		return parent::generate();
	}


	/**
	 * Generate the module
	 */
	protected function compile()
	{
		parent::compile();

		// --- create FE template for css
		$objTemplateCss = new \FrontendTemplate($this->dk_cfsCssTpl);
		$objTemplateCss->id = $this->id;

		// --- create FE template for javascript caller
		$objTemplateJs = new \FrontendTemplate($this->dk_cfsJsTpl);
	
		// (unique) Element id will be used for unique HTML id element
		$objTemplateJs->id = $this->id;
	
		$carouFredSel = new CarouFredSel();
		$carouFredSel->createTemplateData($this->dk_cfsCarouFredSel, $this->type, $this->Template, $objTemplateCss, $objTemplateJs);
	}
}

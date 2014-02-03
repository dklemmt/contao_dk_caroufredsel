<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package   carouFredSel
 * @author    Dirk Klemmt
 * @license   MIT/GPL
 * @copyright Dirk Klemmt 2012-2014
 */


/**
 * Namespace
 */
namespace Dirch\carouFredSel;


/**
 * Class ContentCarouFredSelBackground
 *
 * Front end content element "caroufredsel_background".
 *
 * @copyright  Dirk Klemmt 2012-2014
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class ContentCarouFredSelBackground extends \carouFredSel\ContentCarouFredSelGallery
{

	/**
	 * Return if there are no files
	 *
	 * @return string
	 */
	public function generate()
	{
		return parent::generate();
	}


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		parent::compile();
	}
}

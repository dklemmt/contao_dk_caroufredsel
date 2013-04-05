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
 * Class CarouFredSelFileTree
 *
 * @copyright  Dirk Klemmt 2012-2013
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class CarouFredSelFileTree extends \FileTree
{

	/**
	 * Load the database object
	 * @param array
	 */
	public function __construct($arrAttributes=null)
	{
		parent::__construct($arrAttributes);

		// caroufredsel gallery/background are galleries as well
		$this->blnIsGallery = ($this->activeRecord->type == ('caroufredsel_gallery' || 'caroufredsel_background'));
	}


	/**
	 * Generate the widget and return it as string
	 *
	 * @return string
	 */
	public function generate()
	{
		return parent::generate();
	}
}

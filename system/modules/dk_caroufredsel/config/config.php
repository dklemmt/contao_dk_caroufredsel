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
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD'], 3, array
(
	'content' => array
	(
		'caroufredsel' => array
		(
			'tables'	=> array('tl_dk_caroufredsel', 'tl_content'),
			'icon'		=> 'system/modules/dk_caroufredsel/assets/images/caroufredsel.png',
		)
	)
));


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['caroufredsel_category'] = array(
	'caroufredsel'				=> 'carouFredSel\ContentCarouFredSelWrapper',
	'caroufredsel_background'	=> 'carouFredSel\ContentCarouFredSelBackground',
	'caroufredsel_gallery'		=> 'carouFredSel\ContentCarouFredSelGallery'
);


/**
 * Back end form fields
 */
$GLOBALS['BE_FFL']['cfsFileTree'] = 'carouFredSel\CarouFredSelFileTree';


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['caroufredsel_category'] = array(
	'caroufredsel'				=> 'carouFredSel\ModuleCarouFredSel',
//	'caroufredsel_background'	=> 'carouFredSel\ModuleCarouFredSelBackground',
//	'caroufredsel_gallery'		=> 'carouFredSel\ModuleCarouFredSelGallery',
	'caroufredsel_ticker'		=> 'carouFredSel\ModuleCarouFredSelTicker'
);

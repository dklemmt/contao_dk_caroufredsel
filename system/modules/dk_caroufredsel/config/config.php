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
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD'], 3, array
(
	'content' => array
	(
		'caroufredsel' => array
		(
			'tables' => array('tl_dk_caroufredsel', 'tl_content'),
			'icon' => 'system/modules/dk_caroufredsel/assets/images/caroufredsel.png',
		)
	)
));


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['caroufredsel_category'] = array(
	'caroufredsel' => 'carouFredSel\ModuleCarouFredSel',
	'caroufredsel_gallery' => 'carouFredSel\ModuleCarouFredSelGallery',
	'caroufredsel_background' => 'carouFredSel\ModuleCarouFredSelBackground',
	'caroufredsel_ticker' => 'carouFredSel\ModuleCarouFredSelTicker'
);


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['caroufredsel_category'] = array(
	'caroufredsel_gallery' => 'carouFredSel\ContentCarouFredSelGallery',
	'caroufredsel_background' => 'carouFredSel\ContentCarouFredSelBackground',
	'caroufredsel_start' => 'carouFredSel\ContentCarouFredSelStart',
	'caroufredsel_stop' => 'carouFredSel\ContentCarouFredSelStop'
);


/**
 * Wrapper elements
 */
$GLOBALS['TL_WRAPPERS']['start'][] = 'caroufredsel_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'caroufredsel_stop';


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_dk_caroufredsel'] = 'carouFredSel\CarouFredSelModel';

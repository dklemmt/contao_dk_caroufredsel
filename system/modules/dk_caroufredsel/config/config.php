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
array_insert($GLOBALS['TL_CTE'], 3, array
(
	'texts' => array
	(
		'caroufredsel'	=> 'carouFredSel\ContentCarouFredSel'
	)
));


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 3, array
(
	'application' => array
	(
		'caroufredsel'			=> 'carouFredSel\ModuleCarouFredSel'
	),
	'news' => array
	(
		'caroufredsel_ticker'	=> 'carouFredSel\ModuleCarouFredSelTicker'
	)
));

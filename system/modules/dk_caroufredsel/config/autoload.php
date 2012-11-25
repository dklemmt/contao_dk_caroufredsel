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
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Dirch',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Dirch\carouFredSel\CarouFredSel'				=> 'system/modules/dk_caroufredsel/classes/CarouFredSel.php',

	// Elements
	'Dirch\carouFredSel\ContentCarouFredSel'		=> 'system/modules/dk_caroufredsel/elements/ContentCarouFredSel.php',

	// Models
//	'Dirch\carouFredSel\CarouFredSelModel'			=> 'system/modules/dk_caroufredsel/models/CarouFredSelModel.php',

	// Modules
	'Dirch\carouFredSel\ModuleCarouFredSel'			=> 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSel.php',
	'Dirch\carouFredSel\ModuleCarouFredSelTicker'	=> 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSelTicker.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_caroufredsel'			=> 'system/modules/dk_caroufredsel/templates',
	'mod_caroufredsel'			=> 'system/modules/dk_caroufredsel/templates',
	'mod_caroufredsel_ticker'	=> 'system/modules/dk_caroufredsel/templates',
	'news_caroufredsel_ticker'	=> 'system/modules/dk_caroufredsel/templates',
	'css_caroufredsel'			=> 'system/modules/dk_caroufredsel/templates',
	'css_caroufredsel_debug'	=> 'system/modules/dk_caroufredsel/templates',
	'js_caroufredsel'			=> 'system/modules/dk_caroufredsel/templates'
));

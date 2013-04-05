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
	'Dirch\carouFredSel\CarouFredSel'					=> 'system/modules/dk_caroufredsel/classes/CarouFredSel.php',

	// Elements
	'Dirch\carouFredSel\ContentCarouFredSelBackground'	=> 'system/modules/dk_caroufredsel/elements/ContentCarouFredSelBackground.php',
	'Dirch\carouFredSel\ContentCarouFredSelGallery'		=> 'system/modules/dk_caroufredsel/elements/ContentCarouFredSelGallery.php',
	'Dirch\carouFredSel\ContentCarouFredSelWrapper'		=> 'system/modules/dk_caroufredsel/elements/ContentCarouFredSelWrapper.php',

	// Models
//	'Dirch\carouFredSel\CarouFredSelModel'				=> 'system/modules/dk_caroufredsel/models/CarouFredSelModel.php',

	// Modules
	'Dirch\carouFredSel\ModuleCarouFredSel'				=> 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSel.php',
//	'Dirch\carouFredSel\ModuleCarouFredSelBackground'	=> 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSelBackground.php',
//	'Dirch\carouFredSel\ModuleCarouFredSelGallery'		=> 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSelGallery.php',
	'Dirch\carouFredSel\ModuleCarouFredSelTicker'		=> 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSelTicker.php',

	// Widgets
	'Dirch\carouFredSel\CarouFredSelFileTree'			=> 'system/modules/dk_caroufredsel/widgets/CarouFredSelFileTree.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_caroufredsel'				=> 'system/modules/dk_caroufredsel/templates',
	'caroufredsel_gallery'			=> 'system/modules/dk_caroufredsel/templates',
	'caroufredsel_thumbnails'		=> 'system/modules/dk_caroufredsel/templates',
	'mod_caroufredsel'				=> 'system/modules/dk_caroufredsel/templates',
	'mod_caroufredsel_ticker'		=> 'system/modules/dk_caroufredsel/templates',
	'news_caroufredsel_ticker'		=> 'system/modules/dk_caroufredsel/templates',
	'css_caroufredsel'				=> 'system/modules/dk_caroufredsel/templates',
	'css_caroufredsel_light'		=> 'system/modules/dk_caroufredsel/templates',
	'css_caroufredsel_debug'		=> 'system/modules/dk_caroufredsel/templates',
	'js_caroufredsel'				=> 'system/modules/dk_caroufredsel/templates'
));

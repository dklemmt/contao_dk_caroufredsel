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
	'Dirch\carouFredSel\CarouFredSel' => 'system/modules/dk_caroufredsel/classes/CarouFredSel.php',

	// Elements
	'Dirch\carouFredSel\ContentCarouFredSelStart' => 'system/modules/dk_caroufredsel/elements/ContentCarouFredSelStart.php',
	'Dirch\carouFredSel\ContentCarouFredSelStop' => 'system/modules/dk_caroufredsel/elements/ContentCarouFredSelStop.php',
	'Dirch\carouFredSel\ContentCarouFredSelGallery' => 'system/modules/dk_caroufredsel/elements/ContentCarouFredSelGallery.php',
	'Dirch\carouFredSel\ContentCarouFredSelBackground' => 'system/modules/dk_caroufredsel/elements/ContentCarouFredSelBackground.php',

	// Models
	'Dirch\carouFredSel\CarouFredSelModel' => 'system/modules/dk_caroufredsel/models/CarouFredSelModel.php',

	// Modules
	'Dirch\carouFredSel\ModuleCarouFredSel'=> 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSel.php',
	'Dirch\carouFredSel\ModuleCarouFredSelGallery' => 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSelGallery.php',
	'Dirch\carouFredSel\ModuleCarouFredSelBackground' => 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSelBackground.php',
	'Dirch\carouFredSel\ModuleCarouFredSelTicker' => 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSelTicker.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_caroufredsel' => 'system/modules/dk_caroufredsel/templates/backend',
	'ce_caroufredsel' => 'system/modules/dk_caroufredsel/templates/elements',
	'caroufredsel_gallery' => 'system/modules/dk_caroufredsel/templates/gallery',
	'caroufredsel_thumbnails' => 'system/modules/dk_caroufredsel/templates/gallery',
	'js_caroufredsel' => 'system/modules/dk_caroufredsel/templates/jquery',
	'mod_caroufredsel' => 'system/modules/dk_caroufredsel/templates/modules',
	'mod_caroufredsel_ticker' => 'system/modules/dk_caroufredsel/templates/modules',
	'news_caroufredsel_ticker' => 'system/modules/dk_caroufredsel/templates/modules',
	'css_caroufredsel' => 'system/modules/dk_caroufredsel/templates/themes',
	'css_caroufredsel_light' => 'system/modules/dk_caroufredsel/templates/themes'
));

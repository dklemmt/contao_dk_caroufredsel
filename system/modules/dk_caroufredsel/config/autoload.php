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
	// Elements
	'Dirch\carouFredSel\ContentCarouFredSel' => 'system/modules/dk_caroufredsel/elements/ContentCarouFredSel.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_caroufredsel_js'	=> 'system/modules/dk_caroufredsel/templates',
	'ce_caroufredsel_html'	=> 'system/modules/dk_caroufredsel/templates'
));

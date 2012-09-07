<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Dk_caroufredsel
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
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

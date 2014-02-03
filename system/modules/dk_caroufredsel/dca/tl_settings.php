<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2014 Leo Feyer
 * 
 * @package   carouFredSel
 * @author    Dirk Klemmt
 * @license   MIT/GPL
 * @copyright Dirk Klemmt 2012-2014
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{caroufredsel_legend:hide},dk_cfsUsageMode,dk_cfsTriggerMode,dk_cfsOnWindowResize,dk_cfsImageLoader,dk_cfsTransition,dk_cfsDebug';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['dk_cfsUsageMode'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode'],
	'inputType'			=> 'select',
	'options'			=> array('basic', 'advanced'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode'],
	'eval'				=> array('helpwizard' => true)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['dk_cfsTriggerMode'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode'],
	'inputType'			=> 'select',
	'options'			=> array('onDocumentReady', 'onWindowLoad', 'readyLoad'),
	'default'			=> 'readyLoad',
	'reference'			=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode'],
	'eval'				=> array('helpwizard' => true, 'tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['dk_cfsOnWindowResize'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize'],
	'inputType'			=> 'select',
	'options'			=> array('throttle', 'debounce'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize'],
	'eval'				=> array('helpwizard' => true, 'includeBlankOption' => true, 'tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['dk_cfsImageLoader'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsImageLoader'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['dk_cfsTransition'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTransition'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['dk_cfsDebug'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsDebug'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class' => 'w50')
);

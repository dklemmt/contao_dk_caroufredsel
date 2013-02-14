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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{caroufredsel_legend:hide},dk_cfsTriggerMode,dk_cfsDebug';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['dk_cfsTriggerMode'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode'],
	'inputType'			=> 'select',
	'options'			=> array('onDocumentReady', 'onWindowLoad', 'readyLoad'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode'],
	'eval'				=> array('helpwizard' => true, 'tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['dk_cfsDebug'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['dk_cfsDebug'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class' => 'w50 m12')
);

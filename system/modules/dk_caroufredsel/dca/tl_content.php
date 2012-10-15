<?php

if (!defined('TL_ROOT')) die('You can not access this file directly!');

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
 * Config
 */
$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] 		= array('tl_content_dk_csf', 'changePalette');

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 				= 'dk_cfsType';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]				= 'dk_cfsUsePlay';
//$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]				= 'dk_cfsAutoPlay';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]				= 'dk_cfsUseTransitions';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 				= 'dk_cfsUseGeneralSize';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 				= 'dk_cfsUseItemsGeneral';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 				= 'dk_cfsUseItemsSize';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]				= 'dk_cfsUseNavigation';
//$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]				= 'dk_cfsNavigation';
//$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]				= 'dk_cfsPagination';

$GLOBALS['TL_DCA']['tl_content']['palettes']['dk_cfs'] 						= '{type_legend},type,dk_cfsType';
$GLOBALS['TL_DCA']['tl_content']['palettes']['dk_cfsdk_cfsStart'] 			= '{type_legend},type,dk_cfsType;
																			   {dk_cfsPlay_legend},dk_cfsUsePlay;
																			   {dk_cfsTransistion_legend},dk_cfsUseTransitions;
																			   {dk_cfsGeneralSize_legend},dk_cfsUseGeneralSize;
																			   {dk_cfsItemsSize_legend},dk_cfsUseItemsSize;
																			   {dk_cfsItemsGeneral_legend},dk_cfsUseItemsGeneral;
																			   {dk_cfsNavigation_legend},dk_cfsUseNavigation;
																			   {template_legend:hide},dk_cfsHTMLTpl,dk_cfsJsTpl;
																			   {expert_legend:hide},cssID,space';

/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUsePlay']			= 'dk_cfsDirection,dk_cfsCarouselType,dk_cfsScrollItems,dk_cfsAutoPlay';
//$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsAutoPlay']			= 'dk_cfsAutoTimeoutDuration,dk_cfsAutoDelay,dk_cfsScrollPauseOnHover';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseTransitions']		= 'dk_cfsScrollFx,dk_cfsScrollEasing,dk_cfsScrollDuration';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseGeneralSize']		= 'dk_cfsWidthSelect,dk_cfsHeightSelect,dk_cfsPadding';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseItemsGeneral']	= 'dk_cfsResponsive,dk_cfsCookie,dk_cfsItemsVisibleSelect,dk_cfsItemsStart,dk_cfsItemsStartRnd';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseItemsSize']		= 'dk_cfsItemsWidthSelect,dk_cfsItemsHeightSelect';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseNavigation']		= 'dk_cfsPrevKey,dk_cfsNextKey,' . (in_array('jquery_touchswipe', $this->Config->getActiveModules()) == true ? 'dk_cfsSwipeOnTouch, dk_cfsSwipeOnMouse,' : '') . (in_array('jquery_mousewheel', $this->Config->getActiveModules()) == true ? 'dk_cfsMousewheel, ' : '') . 'dk_cfsNavigation';
//$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsNavigation']			= 'dk_cfsPagination';
//$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsPagination']			= 'dk_cfsPaginationKeys';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsType'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsType'],
  	'default'			=> 'dk_cfsStart',
  	'inputType'			=> 'radio',
 	'options'			=> array('dk_cfsStart', 'dk_cfsStop'),
  	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
  	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

// --- play behaviour
$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsUsePlay'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsUsePlay'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsCarouselType'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsCarouselType'],
	'inputType'			=> 'select',
	'options'			=> array('circular', 'infinite', 'one time only'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsDirection'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsDirection'],
	'inputType'			=> 'select',
	'default'			=> 'left',
	'options'			=> array('left', 'right', 'up', 'down'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('submitOnChange' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsScrollItems'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollItems'],
	'inputType'			=> 'text',
	'eval'				=> array('maxlength' => 5, 'rgxp' => 'digit'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsAutoPlay'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoPlay'],
	'inputType'			=> 'checkbox',
	'default'			=> '1',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsAutoTimeoutDuration'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoTimeoutDuration'],
	'inputType'			=> 'text',
	'eval'				=> array('maxlength' => 10, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "int(10) NOT NULL default '2500'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsAutoDelay'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoDelay'],
	'inputType'			=> 'text',
	'eval'				=> array('maxlength' => 10, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "int(10) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsScrollPauseOnHover'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollPauseOnHover'],
	'inputType'			=> 'select',
	'default'			=> 'none',
	'options'			=> array('none', 'restart', 'resume', 'immediate', 'immediate-resume'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'clr'),
    'sql'				=> "varchar(32) NOT NULL default ''"
);

// --- transistions
$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsUseTransitions'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseTransitions'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsScrollFx'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollFx'],
	'inputType'			=> 'select',
	'default'			=> 'scroll',
	'options'			=> array('none', 'scroll', 'directscroll', 'fade', 'crossfade', 'cover', 'cover-fade', 'uncover', 'uncover-fade'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsScrollEasing'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollEasing'],
	'inputType'			=> 'select',
	'default'			=> 'swing',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsScrollEasingOptions'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsScrollDuration'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollDuration'],
	'inputType'			=> 'text',
	'eval'				=> array('maxlength' => 10, 'rgxp' => 'digit'),
	'sql'				=> "int(10) NOT NULL default '500'"
);

// --- general size
$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsUseGeneralSize'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseGeneralSize'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsWidthSelect'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsWidthSelect'],
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsWidthSelectOptions'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('submitOnChange' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsWidth'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsWidth'],
	'inputType'			=> 'inputUnit',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsWidthOptions'),
	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsHeightSelect'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsHeightSelect'],
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsHeightSelectOptions'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('submitOnChange' => true, 'includeBlankOption' => true, 'tl_class' => 'w50 clr'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsHeight'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsHeight'],
	'inputType'			=> 'inputUnit',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsHeightOptions'),
	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsPadding'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsPadding'],
	'inputType'			=> 'trbl',
	'options'			=> array('px'),
	'eval'				=> array('includeBlankOption' => true, 'maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50 clr'),
	'sql'				=> "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsAlign'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsAlign'],
	'inputType'			=> 'select',
	'default'			=> 'center',
	'options'			=> array('center', 'left', 'right'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('includeBlankOption' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

// --- items size
$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsUseItemsSize'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseItemsSize'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsItemsWidthSelect'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsWidthSelect'],
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsItemsWidthSelectOptions'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('submitOnChange' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsItemsWidth'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsWidth'],
	'inputType'			=> 'inputUnit',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsItemsWidthOptions'),
	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsItemsHeightSelect'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsHeightSelect'],
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsItemsHeightSelectOptions'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('submitOnChange' => true, 'includeBlankOption' => true, 'tl_class' => 'w50 clr'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsItemsHeight'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsHeight'],
	'inputType'			=> 'inputUnit',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsItemsHeightOptions'),
	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

// --- items general
$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsUseItemsGeneral'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseItemsGeneral'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsResponsive'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsResponsive'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true, 'tl_class' => 'w50'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsCookie'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsCookie'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsItemsVisibleSelect'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisibleSelect'],
	'inputType'			=> 'select',
	'options'			=> array('variable', 'fixed', 'min/max'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('submitOnChange' => true, 'includeBlankOption' => true, 'tl_class' => 'w50 clr'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsItemsVisible'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisible'],
  	'inputType'			=> 'text',
  	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsItemsVisibleMin'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisibleMin'],
	'inputType'			=> 'text',
	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50 clr'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsItemsVisibleMax'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisibleMax'],
	'inputType'			=> 'text',
	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsItemsStart'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsStart'],
  	'inputType'			=> 'text',
  	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50 clr'),
	'sql'				=> "smallint(5) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsItemsStartRnd'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsStartRnd'],
	'inputType'			=> 'checkbox',
  	'eval'				=> array( 'tl_class' => 'w50 m12'),
	'sql'				=> "char(1) NOT NULL default ''"
);

// --- navigation
$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsUseNavigation'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseNavigation'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsPrevKey'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsPrevKey'],
	'inputType'			=> 'select',
	'default'			=> 'none',
	'options'			=> array('none', 'left', 'up', 'right', 'down'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50 clr'),
    'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsNextKey'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsNextKey'],
	'inputType'			=> 'select',
	'default'			=> 'none',
	'options'			=> array('none', 'right', 'down', 'left', 'up'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50'),
    'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsSwipeOnTouch'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsSwipeOnTouch'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsSwipeOnMouse'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsSwipeOnMouse'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsMousewheel'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsMousewheel'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class' => 'w50 clr'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsNavigation'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsNavigation'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true, 'tl_class' => 'clr'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsAutoButton'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoButton'],
	'inputType'			=> 'checkbox',
//	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsPagination'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsPagination'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true, 'tl_class' => 'w50'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsPaginationKeys'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsPaginationKeys'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsHTMLTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsHTMLTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsHTMLTemplates'),
	'eval'				=> array('maxlength' => 128, 'mandatory' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsJsTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsJsTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsJsTemplates'),
	'eval'				=> array('maxlength' => 128, 'mandatory' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(128) NOT NULL default ''"
);

/**
 * Class tl_content_dk_csf 
 *
 * @copyright  Dirk Klemmt 2012 
 * @author     Dirk Klemmt 
 * @package    carouFredSel
 */
class tl_content_dk_csf extends tl_content
{
	public function changePalette(DataContainer $dc)
	{
		if (!$dc->id)
		{
			return;
		}

		$obj = $this->Database->prepare("SELECT dk_cfsAutoPlay, dk_cfsNavigation, dk_cfsPagination, dk_cfsWidthSelect, dk_cfsHeightSelect, dk_cfsItemsWidthSelect, dk_cfsItemsHeightSelect, dk_cfsItemsVisibleSelect " .
										"FROM tl_content " .
										"WHERE id = ? ")
									->limit(1)
									->execute($dc->id);

		if ($obj->numRows < 1)
		{
			return;
		}

		/*
		 * Unfortunately a checkbox triggering a subpalette in a subpalette triggerd by a checkbox is not possible.
		 * Thus there is need for a small workaround:
		 * - grab the data of the inner checkbox
		 * - if it's selected show the fields (which normally should have been shown due to contao palette switch) 
		 */
		if ($obj->dk_cfsAutoPlay)
		{
			$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUsePlay'] = str_replace('dk_cfsAutoPlay', 'dk_cfsAutoPlay,dk_cfsAutoTimeoutDuration,dk_cfsAutoDelay,dk_cfsScrollPauseOnHover', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUsePlay']);
		}

		if ($obj->dk_cfsNavigation)
		{
			$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseNavigation'] = str_replace('dk_cfsNavigation', 'dk_cfsNavigation' . ($obj->dk_cfsAutoPlay ? ',dk_cfsAutoButton' : '') . ',dk_cfsPagination', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseNavigation']);
		}
		
		if ($obj->dk_cfsPagination)
		{
			$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseNavigation'] = str_replace('dk_cfsPagination', 'dk_cfsPagination,dk_cfsPaginationKeys', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseNavigation']);
		}

		// only show field 'dk_cfsWidth' if field 'dk_cfsWidthSelect' contains 'fixed' or 'fluid'
		if ($obj->dk_cfsWidthSelect == 'fixed' || $obj->dk_cfsWidthSelect == 'fluid')
		{
			$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseGeneralSize'] = str_replace('dk_cfsWidthSelect', 'dk_cfsWidthSelect,dk_cfsWidth', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseGeneralSize']);
		}

		// only show field 'dk_cfsHeight' if field 'dk_cfsHeightSelect' contains 'fixed' or 'fluid'
		if ($obj->dk_cfsHeightSelect == 'fixed' || $obj->dk_cfsHeightSelect == 'fluid')
		{
			$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseGeneralSize'] = str_replace('dk_cfsHeightSelect', 'dk_cfsHeightSelect,dk_cfsHeight', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseGeneralSize']);
		}

		// only show field 'dk_cfsAlign' if fields 'dk_cfsWidthSelect' or 'dk_cfsHeightSelect' contain 'fixed'
		if ($obj->dk_cfsWidthSelect == 'fixed' || $obj->dk_cfsHeightSelect == 'fixed')
		{
			$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseGeneralSize'] = str_replace(',dk_cfsPadding', ',dk_cfsPadding,dk_cfsAlign', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseGeneralSize']);
		}

		// only show field 'dk_cfsItemsVisible' if field 'dk_cfsItemsVisibleSelect' contains 'fixed'
		if ($obj->dk_cfsItemsVisibleSelect == 'fixed')
		{
			$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseItemsGeneral'] = str_replace('dk_cfsItemsVisibleSelect', 'dk_cfsItemsVisibleSelect,dk_cfsItemsVisible', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseItemsGeneral']);
		}

		// only show fields 'dk_cfsItemsVisibleMin' and 'dk_cfsItemsVisibleMax' if field 'dk_cfsItemsVisibleSelect' contains 'min/max'
		if ($obj->dk_cfsItemsVisibleSelect == 'min/max')
		{
			$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseItemsGeneral'] = str_replace('dk_cfsItemsVisibleSelect', 'dk_cfsItemsVisibleSelect,dk_cfsItemsVisibleMin,dk_cfsItemsVisibleMax', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseItemsGeneral']);
		}

		// only show field 'dk_cfsItemsWidth' if field 'dk_cfsItemsWidthSelect' contains 'fixed' or 'fluid'
		if ($obj->dk_cfsItemsWidthSelect == 'fixed' || $obj->dk_cfsItemsWidthSelect == 'fluid')
		{
			$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseItemsSize'] = str_replace('dk_cfsItemsWidthSelect', 'dk_cfsItemsWidthSelect,dk_cfsItemsWidth', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseItemsSize']);
		}

		// only show field 'dk_cfsItemsHeight' if field 'dk_cfsItemsHeightSelect' contains 'fixed' or 'fluid'
		if ($obj->dk_cfsItemsHeightSelect == 'fixed' || $obj->dk_cfsItemsHeightSelect == 'fluid')
		{
			$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseItemsSize'] = str_replace('dk_cfsItemsHeightSelect', 'dk_cfsItemsHeightSelect,dk_cfsItemsHeight', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseItemsSize']);
		}
	}

	/**
	 * Return all possible easing options as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsScrollEasingOptions(DataContainer $dc)
	{
		$easingOptions = array('linear', 'swing', 'quadratic', 'cubic', 'elastic');

		// if plugin 'jquery_easing' is installed we have more easing options to choose from
		if (in_array('jquery_easing', $this->Config->getActiveModules()))
		{
			array_push($easingOptions, 'easeInQuad', 'easeOutQuad', 'easeInOutQuad', 'easeInCubic', 'easeOutCubic',
							'easeInOutCubic', 'easeInQuart', 'easeOutQuart', 'easeInOutQuart', 'easeInQuint',
							'easeOutQuint', 'easeInOutQuint', 'easeInSine', 'easeOutSine', 'easeInOutSine',
							'easeInExpo', 'easeOutExpo', 'easeInOutExpo', 'easeInCirc', 'easeOutCirc',
							'easeInOutCirc', 'easeInElastic', 'easeOutElastic', 'easeInOutElastic', 'easeInBack',
							'easeOutBack', 'easeInOutBack', 'easeInBounce', 'easeOutBounce', 'easeInOutBounce');
		} 

		return $easingOptions;
	}

	/**
	 * Return all possible horizontal size options as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsWidthSelectOptions(DataContainer $dc)
	{
		$horizontalSizeOptions = array('variable', 'auto', 'fixed');

		if (!$dc->id)
		{
			return $horizontalSizeOptions;
		}

		// (horizontal) fluid only applies on horizontal carousels so check it
		$obj = $this->Database->prepare("SELECT dk_cfsDirection " .
										"FROM tl_content " .
										"WHERE id = ? ")
									->limit(1)
									->execute($dc->id);

		if ($obj->numRows > 0 && ($obj->dk_cfsDirection == 'left' || $obj->dk_cfsDirection == 'right'))
		{
			array_push($horizontalSizeOptions, 'fluid');
		}

		return $horizontalSizeOptions;
	}

	/**
	 * Return all possible ... options as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsWidthOptions(DataContainer $dc)
	{
		if (!$dc->id)
		{
			return $widthOptions;
		}

		// check if horizontal size is fixed or fluid
		$obj = $this->Database->prepare("SELECT dk_cfsWidthSelect " .
										"FROM tl_content " .
										"WHERE id = ? ")
									->limit(1)
									->execute($dc->id);

		if ($obj->numRows > 0)
		{
			$widthOptions = array($obj->dk_cfsWidthSelect == 'fluid' ? '%' : 'px');
		}

		return $widthOptions;
	}
	
	/**
	 * Return all possible vertical size options as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsHeightSelectOptions(DataContainer $dc)
	{
		$verticalSizeOptions = array('variable', 'auto', 'fixed');

		if (!$dc->id)
		{
			return $verticalSizeOptions;
		}

		// (vertical) fluid only applies on vertical carousels so check it
		$obj = $this->Database->prepare("SELECT dk_cfsDirection " .
										"FROM tl_content " .
										"WHERE id = ? ")
									->limit(1)
									->execute($dc->id);

		if ($obj->numRows > 0 && ($obj->dk_cfsDirection == 'up' || $obj->dk_cfsDirection == 'down'))
		{
			array_push($verticalSizeOptions, 'fluid');
		}

		return $verticalSizeOptions;
	}

	/**
	 * Return all possible ... options as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsHeightOptions(DataContainer $dc)
	{
		if (!$dc->id)
		{
			return $heightOptions;
		}

		// check if vertical size is fixed or fluid
		$obj = $this->Database->prepare("SELECT dk_cfsHeightSelect " .
										"FROM tl_content " .
										"WHERE id = ? ")
									->limit(1)
									->execute($dc->id);

		if ($obj->numRows > 0)
		{
			$heightOptions = array($obj->dk_cfsHeightSelect == 'fluid' ? '%' : 'px');
		}

		return $heightOptions;
	}

	/**
	 * Return all possible horizontal item size options as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsItemsWidthSelectOptions(DataContainer $dc)
	{
		$horizontalItemSizeOptions = array('variable', 'fixed');

		if (!$dc->id)
		{
			return $horizontalItemSizeOptions;
		}

		// (horizontal) fluid only applies on responsive, vertical carousels so check it
		$obj = $this->Database->prepare("SELECT dk_cfsResponsive, dk_cfsDirection " .
										"FROM tl_content " .
										"WHERE id = ? ")
									->limit(1)
									->execute($dc->id);

		if ($obj->numRows > 0 && $obj->dk_cfsResponsive && ($obj->dk_cfsDirection == 'up' || $obj->dk_cfsDirection == 'down'))
		{
			array_push($horizontalItemSizeOptions, 'fluid');
		}

		return $horizontalItemSizeOptions;
	}

	/**
	 * Return all possible ... options as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsItemsWidthOptions(DataContainer $dc)
	{
		if (!$dc->id)
		{
			return $itemWidthOptions;
		}

		// check if horizontal item size is fixed or fluid
		$obj = $this->Database->prepare("SELECT dk_cfsItemsWidthSelect " .
										"FROM tl_content " .
										"WHERE id = ? ")
									->limit(1)
									->execute($dc->id);

		if ($obj->numRows > 0)
		{
			$itemWidthOptions = array($obj->dk_cfsItemsWidthSelect == 'fluid' ? '%' : 'px');
		}

		return $itemWidthOptions;
	}

	/**
	 * Return all possible vertical item size options as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsItemsHeightSelectOptions(DataContainer $dc)
	{
		$verticalItemSizeOptions = array('variable', 'fixed');

		if (!$dc->id)
		{
			return $verticalItemSizeOptions;
		}

		// (vertical) fluid only applies on responsive, horizontal carousels so check it
		$obj = $this->Database->prepare("SELECT dk_cfsResponsive, dk_cfsDirection " .
										"FROM tl_content " .
										"WHERE id = ? ")
									->limit(1)
									->execute($dc->id);

		if ($obj->numRows > 0 && $obj->dk_cfsResponsive && ($obj->dk_cfsDirection == 'left' || $obj->dk_cfsDirection == 'right'))
		{
			array_push($verticalItemSizeOptions, 'fluid');
		}

		return $verticalItemSizeOptions;
	}

	/**
	 * Return all possible ... options as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsItemsHeightOptions(DataContainer $dc)
	{
		if (!$dc->id)
		{
			return $itemHeightOptions;
		}

		// check if vertical item size is fixed or fluid
		$obj = $this->Database->prepare("SELECT dk_cfsItemsHeightSelect " .
										"FROM tl_content " .
										"WHERE id = ? ")
									->limit(1)
									->execute($dc->id);

		if ($obj->numRows > 0)
		{
			$itemHeightOptions = array($obj->dk_cfsItemsHeightSelect == 'fluid' ? '%' : 'px');
		}

		return $itemHeightOptions;
	}

	/**
	 * Return all carouFredSel HTML templates as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsHTMLTemplates(DataContainer $dc)
	{
		$intPid = $dc->activeRecord->pid;

		if (Input::get('act') == 'overrideAll')
		{
			$intPid = Input::get('id');
		}

		return $this->getTemplateGroup('ce_caroufredsel_html', $intPid);
	}

	/**
	 * Return all carouFredSel JavaScript templates as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsJsTemplates(DataContainer $dc)
	{
		$intPid = $dc->activeRecord->pid;

		if (Input::get('act') == 'overrideAll')
		{
			$intPid = Input::get('id');
		}

		return $this->getTemplateGroup('ce_caroufredsel_js', $intPid);
	}
}

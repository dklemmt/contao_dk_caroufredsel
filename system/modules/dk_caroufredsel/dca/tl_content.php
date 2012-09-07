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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'dk_cfsType';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]			= 'dk_cfsScrollEffects';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]			= 'dk_cfsAutoPlay';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]			= 'dk_cfsNavigation';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]			= 'dk_cfsPagination';

$GLOBALS['TL_DCA']['tl_content']['palettes']['dk_cfs'] 					= '{type_legend},type,dk_cfsType';
$GLOBALS['TL_DCA']['tl_content']['palettes']['dk_cfsdk_cfsStart'] 		= '{type_legend},type,dk_cfsType;
																		   {dk_cfsGeneral_legend},dk_cfsSize,
																		   dk_cfsVisibleItems,dk_cfsStartItemNo,dk_cfsStartItemRnd;
																		   {dk_cfsPlay_legend},dk_cfsDirection,dk_cfsCarouselType,
																		   dk_cfsScrollItems,dk_cfsAutoPlay;
																		   {dk_cfsScrollEffects_legend:hide},dk_cfsScrollEffects;
																		   {dk_cfsNavigation_legend:hide},dk_cfsNavigation;
																		   {template_legend:hide},dk_cfsHTMLTpl,dk_cfsJsTpl;
																		   {expert_legend:hide},cssID,space';


/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsScrollEffects']	= 'dk_cfsFx,dk_cfsEasing,dk_cfsDuration';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsAutoPlay']		= 'dk_cfsPauseDuration,dk_cfsDelay,dk_cfsPauseOnHover';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsNavigation']		= 'dk_cfsPrevKey,dk_cfsNextKey,dk_cfsPagination';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsPagination']		= 'dk_cfsPaginationKeys';


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
  	'eval'				=> array('submitOnChange'=>true),
	'sql'				=> "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsSize'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsSize'],
	'inputType'			=> 'text',
//	'eval'				=> array('maxlength'=>4, 'multiple'=>true, 'size'=>2, 'no space'=>true, 'tl_class'=>'w50'),
	'eval'				=> array('maxlength'=>4, 'multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'no space'=>true, 'tl_class'=>'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

/*$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsPadding'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsPadding'],
	'inputType'			=> 'trbl',
	'options'			=> array('px'),
	'eval'				=> array('tl_class'=>'w50'),
	'sql'				=> "varchar(128) NOT NULL default ''"
);*/

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsVisibleItems'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsVisibleItems'],
  	'inputType'			=> 'text',
  	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'clr'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsStartItemNo'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsStartItemNo'],
  	'inputType'			=> 'text',
  	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "smallint(5) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsStartItemRnd'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsStartItemRnd'],
	'inputType'			=> 'checkbox',
  	'eval'				=> array( 'tl_class' => 'w50 m12'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsDirection'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsDirection'],
	'inputType'			=> 'select',
	'default'			=> 'left',
	'options'			=> array('left', 'right', 'up', 'down'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsCarouselType'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsCarouselType'],
	'inputType'			=> 'select',
	'options'			=> array('circular', 'infinite', 'one time only'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsScrollItems'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollItems'],
	'inputType'			=> 'text',
	'eval'				=> array('maxlength' => 5, 'rgxp' => 'digit'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsScrollEffects'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollEffects'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsFx'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsFx'],
	'inputType'			=> 'select',
	'default'			=> 'scroll',
	'options'			=> array('none', 'scroll', 'directscroll', 'fade', 'crossfade', 'cover', 'uncover'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsEasing'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsEasing'],
	'inputType'			=> 'select',
	'default'			=> 'swing',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsEasingOptions'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsDuration'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsDuration'],
	'inputType'			=> 'text',
	'eval'				=> array('maxlength' => 10, 'rgxp' => 'digit'),
	'sql'				=> "int(10) NOT NULL default '500'"
);

/* Auto */
$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsAutoPlay'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoPlay'],
	'inputType'			=> 'checkbox',
	'default'			=> '1',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsPauseDuration'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsPauseDuration'],
	'inputType'			=> 'text',
	'eval'				=> array('maxlength' => 10, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "int(10) NOT NULL default '2500'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsDelay'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsDelay'],
	'inputType'			=> 'text',
	'eval'				=> array('maxlength' => 10, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "int(10) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsPauseOnHover'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsPauseOnHover'],
	'inputType'			=> 'select',
	'default'			=> 'none',
	'options'			=> array('none', 'restart', 'resume', 'immediate', 'immediate-resume'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'clr'),
    'sql'				=> "varchar(24) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsNavigation'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsNavigation'],
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
	'eval'				=> array('tl_class' => 'w50'),
    'sql'				=> "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsNextKey'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsNextKey'],
	'inputType'			=> 'select',
	'default'			=> 'none',
	'options'			=> array('none', 'right', 'down', 'left', 'up'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50'),
    'sql'				=> "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsPagination'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsPagination'],
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsPaginationKeys'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsPaginationKeys'],
	'inputType'			=> 'checkbox',
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsHTMLTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsHTMLTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsHTMLTemplates'),
	'eval'				=> array('maxlength' => 64, 'mandatory' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsJsTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsJsTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getDk_cfsJsTemplates'),
	'eval'				=> array('maxlength' => 64, 'mandatory' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
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

	/**
	 * Return all possible easing options as array
	 * @param \DataContainer
	 * @return array
	 */
	public function getDk_cfsEasingOptions(DataContainer $dc)
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

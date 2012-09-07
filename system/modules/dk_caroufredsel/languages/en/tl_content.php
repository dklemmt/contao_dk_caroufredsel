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
 * @copyright 2012 Dirk Klemmt 
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['dk_cfsType']					= array('Operation mode', 'Please select the operation mode of the carouFredSel element.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStart']				= array('Wrapper start', 'Marks the beginning of a carouFredSel carousel that spans several content elements.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStop']					= array('Wrapper stop', 'Marks the end of a carouFredSel carousel that spans several content elements.');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsSize']					= array('Width and height', 'The width and/or heigth of the carousel in pixel. Leave it blank to be calculated automatically.');
//$GLOBALS['TL_LANG']['tl_content']['dk_cfsPadding']				= array('padding', '');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsVisibleItems']			= array('number of visible items', 'The number of visible items. If 0, the number will be calculated');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStartItemNo']			= array('number of start element', 'The nth item to start the carousel. If 0, the first one will be used. This can also be a negative number.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStartItemRnd']			= array('random start element', '');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsDirection']			= array('Direction', 'The direction to scroll the carousel.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsCarouselType']			= array('Type', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollItems']			= array('Items', 'The number of items to scroll. If 0, the number of visible items is used.');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollEffects']		= array('change transition effects', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsFx']					= array('Transition', 'Indicates which effect to use for the transition.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsEasing']				= array('Easing', 'Indicates which easing function to use for the transition.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsDuration']				= array('Duration', 'Determines the duration of the transition in milliseconds. If less than 10, the number is interpreted as a speed (pixels/millisecond)');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoPlay']				= array('auto play', 'Determines whether the carousel should scroll automatically or not.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPauseDuration']		= array('Duration', 'The amount of milliseconds the carousel will pause.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsDelay']				= array('Delay', 'Additional delay in milliseconds before the carousel starts scrolling the first time. This can also be a negative number.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPauseOnHover']			= array('Pause on hover', 'Determines whether the timeout between transitions should be paused on mouse hover and how the transition will be handled afterwards.');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsNavigation']			= array('show navigation', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPrevKey']				= array('Key to scroll backward', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsNextKey']				= array('Key to scroll forward', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPagination']			= array('show pagination', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPaginationKeys']		= array('pagination can be controlled via keys 1-9', '');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsHTMLTpl']				= array('HTML template', 'Choose the HTML template.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsJsTpl']				= array('JavaScript template', 'Choose the JavaScript template.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['dk_cfsGeneral_legend']		= 'Global settings';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPlay_legend']			= 'Play behaviour';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollEffects_legend']	= 'Transitions';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsNavigation_legend']	= 'Navigation';


/**
 * References
 */

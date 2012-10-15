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
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPlay_legend']			= 'Play behaviour';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsTransistion_legend']	= 'Transitions';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsGeneralSize_legend']	= 'Size/Alignment of carousel';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsSize_legend']		= 'Size of items';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsGeneral_legend']	= 'Darstellung der Elemente';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsNavigation_legend']	= 'Navigation';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['dk_cfsType']					= array('Operation mode', 'Please select the operation mode of the carouFredSel element.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStart']				= array('Wrapper start', 'Marks the beginning of a carouFredSel carousel that spans several content elements.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStop']					= array('Wrapper stop', 'Marks the end of a carouFredSel carousel that spans several content elements.');

// --- play behaviour
$GLOBALS['TL_LANG']['tl_content']['dk_cfsUsePlay']				= array('Play behaviour', 'Laufrichtung, Art, automatisches Abspielen, Anzeigedauer, Verzögerung, Maus-Hover.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsDirection']			= array('Direction', 'Scroll direction of the carousel.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsCarouselType']			= array('Type', 'Die Art wie die Elemente abgespielt werden.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollItems']			= array('Items', 'The number of items to scroll. If 0, the number of visible items is used.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoPlay']				= array('auto play', 'Determines whether the carousel should scroll automatically or not.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoTimeoutDuration']	= array('Duration', 'The amount of milliseconds the carousel will pause.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoDelay']			= array('Delay', 'Additional delay in milliseconds before the carousel starts scrolling the first time. This can also be a negative number.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollPauseOnHover']	= array('Pause on hover', 'Determines whether the timeout between transitions should be paused on mouse hover and how the transition will be handled afterwards.');

// --- transistions
$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseTransitions']		= array('Transition effects', 'Transition, Transition, Duration');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollFx']				= array('Transition', 'Indicates which effect to use for the transition.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollEasing']			= array('Easing', 'Indicates which easing function to use for the transition.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollDuration']		= array('Duration', 'Determines the duration of the transition in milliseconds. If less than 10, the number is interpreted as a speed (pixel/millisecond)');

// --- general size
$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseGeneralSize']		= array('Größe des Karussells', 'Breite, Höhe, Padding, Ausrichtung der Elemente.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsWidthSelect']			= array('Type of width', 'Bestimmt die Art wie die Breite des Karussells bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsWidth']				= array('Width', 'The width of the carousel.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsHeightSelect']			= array('Type of height', 'Bestimmt die Art wie die Höhe des Karussells bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsHeight']				= array('Height', 'The heigth of the carousel.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPadding']				= array('Padding', 'Bestimmt den Innenabstand des gesammten Karussells.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsAlign']				= array('Ausrichtung der Elemente', 'Bestimmt die Ausrichtung der Elemente innerhalb des Karussells.');

// --- items size
$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseItemsSize']			= array('Größe der Elemente', 'Breite, Höhe.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsWidthSelect']		= array('Art der Breite', 'Bestimmt die Art wie die Breite der Elemente bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsWidth']			= array('Breite', 'Bestimmt die Breite der Elemente in Abhängigkeit der gewählten Art.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsHeightSelect']	= array('Art der Höhe', 'Bestimmt die Art wie die Höhe der Elemente bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsHeight']			= array('Höhe', 'Bestimmt die Höhe der Elemente in Abhängigkeit der gewählten Art.');

// --- items general
$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseItemsGeneral']		= array('Darstellung der Elemente', 'Responsive, Anzahl sichtbarer Elemente, Start-Element, Start-Element zufällig.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsResponsive']			= array('Responsive', 'Bestimmt, ob die Elemente automatisch in ihrer Größe angepaßt werden.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsCookie']				= array('Saved position', 'Determines whether the carousel should start at its last viewed position.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisibleSelect']	= array('Anzahl sichtbarer Elemente', 'Bestimmt die Art wie die Anzahl der sichtbaren Elemente bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisible']			= array('number of visible items', 'The number of visible items.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisibleMin']		= array('Minimale Anzahl', 'Minimale Anzahl an Elementen, die immer sichtbar sind.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisibleMax']		= array('Maximale Anzahl', 'Maximale Anzahl an Elementen, die immer sichtbar sind.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsStart']			= array('number of start element', 'The nth item to start the carousel. If 0, the first one will be used. This can also be a negative number.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsStartRnd']		= array('random start element', 'Bestimmt, ob das Start-Element zufällig aus den vorhandenen gewählt wird.');

// --- navigation
$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseNavigation']		= array('Navigation', 'Tasten, Mausrad, Wischgeste, Anzeige der Navigation, Anzeige der Pagination.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPrevKey']				= array('Key to scroll backward', 'Bestimmt mit welcher Taste zurück gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsNextKey']				= array('Key to scroll forward', 'Bestimmt mit welcher Taste vorwärts gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsMousewheel']			= array('Scrolling by mousewheel', 'Determines wether the carousel is scrolled by mousewheel.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsSwipeOnTouch']			= array('Scrolling by wipe action', 'Determines wether the carousel is scrolled by wipe action.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsSwipeOnMouse']			= array('Scrolling by mouse dragging', 'Determines wether the carousel is scrolled by mouse dragging.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsNavigation']			= array('show navigation', 'Bestimmt, ob visuelle Navigations-Elemente eingeblendet werden sollen.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPagination']			= array('show pagination', 'Bestimmt, ob eine visuelle Pagination eingeblendet werden soll.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPaginationKeys']		= array('pagination can be controlled via keys 1-9', 'Bestimmt, ob die Pagination mit der Tastatur bedienbar ist. ');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsHTMLTpl']				= array('HTML template', 'Choose the HTML template.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsJsTpl']				= array('JavaScript template', 'Choose the JavaScript template.');

/**
 * References
 */

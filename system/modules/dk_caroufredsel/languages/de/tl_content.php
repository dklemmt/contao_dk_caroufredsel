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
$GLOBALS['TL_LANG']['tl_content']['dk_cfsType']					= array('Betriebsart', 'Bitte wählen Sie die Betriebsart des carouFredSel-Elements.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStart']				= array('Umschlag-Anfang', 'Markiert den Anfang eines carouFredSel-Karussells, das mehrere Inhaltselemente umfasst.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStop']					= array('Umschlag-Ende', 'Markiert das Ende eines carouFredSel-Karussells, das mehrere Inhaltselemente umfasst.');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsSize']					= array('Breite und Höhe', 'Bestimmen Sie die Breite und/oder Höhe des Karussells in Pixeln. Lassen Sie die Felder leer um dies automatisch berechnen zu lassen.');
//$GLOBALS['TL_LANG']['tl_content']['dk_cfsPadding']				= array('Padding', 'Bestimmen Sie den Innenabstand um das Karussell.');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsVisibleItems']			= array('Anzahl gleichzeitig sichtbarer Elemente', 'Anzahl der gleichzeitig sichtbaren Elemente. Geben Sie 0 ein um dies automatisch berechnen zu lassen.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStartItemNo']			= array('Nummer des Start-Elements', 'Nummer des Elements, das am Anfang steht. Geben Sie 0 ein um dies automatisch berechnen zu lassen. Die Nummer darf auch negativ sein.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStartItemRnd']			= array('zufälliges Start-Element', '');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsDirection']			= array('Laufrichtung', 'Die Bewegungsrichtung des Karussells.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsCarouselType']			= array('Typ', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollItems']			= array('Elemente', 'Anzahl der gleichzeitig zu scrollenden Elemente. Geben Sie 0 ein um die Anzahl der sichtbaren Elemente zu scrollen.');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollEffects']		= array('Übergangs-Effekte anpassen', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsFx']					= array('Übergangs-Effekt', 'Bestimmt den Effekt beim Scrollen eines Elements.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsEasing']				= array('Abschwächungs-Funktion', 'Bestimmt die Abschwächungs-Funktion, die auf den Übergang angewandt wird.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsDuration']				= array('Übergangs-Dauer', 'Bestimmt die Dauer des Übergangs in Millisekunden. Werte kleiner 10 werden als Geschwindigkeit interpretiert (Pixel/Millisekunde).');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoPlay']				= array('automatisches Abspielen', 'Bestimmt, ob das Karussell automatisch scrollen soll oder nicht.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPauseDuration']		= array('Anzeigedauer', 'Bestimmt die Dauer der Anzeige der Elemente bevor erneut gescrollt wird in Millisekunden.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsDelay']				= array('Verzögerung', 'Bestimmt die Dauer der Scroll-Verzögerung beim ersten Element in Millisekunden. Die Zahl darf auch negativ sein.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPauseOnHover']			= array('Pause bei Maus-Hover', 'Bestimmt, ob das Karusell bei Maus-Hover pausiert und wie der Übergangs-Effekt im Anschluß weiterläuft.');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsNavigation']			= array('Navigation anzeigen', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPrevKey']				= array('Taste für vorheriges Element', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsNextKey']				= array('Taste für nächstes Element', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPagination']			= array('Pagination anzeigen', '');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPaginationKeys']		= array('Pagination mit Tasten 1-9 anwählbar', '');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsHTMLTpl']				= array('HTML-Template', 'Hier können Sie das HTML-Template auswählen.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsJsTpl']				= array('JavaScript-Template', 'Hier können Sie das JavaScript-Template auswählen.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['dk_cfsGeneral_legend']		= 'Allgemeine Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPlay_legend']			= 'Abspielverhalten';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollEffects_legend']	= 'Übergangs-Effekte';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsNavigation_legend']	= 'Navigation';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['left']						= 'links';
$GLOBALS['TL_LANG']['tl_content']['right']						= 'rechts';
$GLOBALS['TL_LANG']['tl_content']['up']							= 'hoch';
$GLOBALS['TL_LANG']['tl_content']['down']						= 'runter';
$GLOBALS['TL_LANG']['tl_content']['circular']					= 'kreisförmig';
$GLOBALS['TL_LANG']['tl_content']['infinite']					= 'unendlich';
$GLOBALS['TL_LANG']['tl_content']['one time only']				= 'einmalig';
$GLOBALS['TL_LANG']['tl_content']['none']						= 'kein';
//$GLOBALS['TL_LANG']['tl_content']['scroll']						= 'scroll';
//$GLOBALS['TL_LANG']['tl_content']['direct scroll']				= 'direct scroll';
//$GLOBALS['TL_LANG']['tl_content']['fade']						= 'fade';
//$GLOBALS['TL_LANG']['tl_content']['crossfade']					= 'crossfade';
//$GLOBALS['TL_LANG']['tl_content']['cover']						= 'cover';
//$GLOBALS['TL_LANG']['tl_content']['uncover']					= 'uncover';
//$GLOBALS['TL_LANG']['tl_content']['linear']						= 'linear';
//$GLOBALS['TL_LANG']['tl_content']['swing']						= 'swing';
//$GLOBALS['TL_LANG']['tl_content']['quadratic']					= 'quadratic';
//$GLOBALS['TL_LANG']['tl_content']['cubic']						= 'cubic';
//$GLOBALS['TL_LANG']['tl_content']['elastic']					= 'elastic';
$GLOBALS['TL_LANG']['tl_content']['restart']					= 'neu starten';
$GLOBALS['TL_LANG']['tl_content']['resume']						= 'fortsetzen';
$GLOBALS['TL_LANG']['tl_content']['immediate']					= 'sofort';
$GLOBALS['TL_LANG']['tl_content']['immediate-resume']			= 'sofort + fortsetzen';

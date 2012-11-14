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
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPlay_legend']			= 'Abspielverhalten';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsTransistion_legend']	= 'Übergangs-Effekte';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsGeneralSize_legend']	= 'Abmessung/Ausrichtung des Karussells';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsSize_legend']		= 'Abmessung der Elemente';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsGeneral_legend']	= 'Darstellung der Elemente';
$GLOBALS['TL_LANG']['tl_content']['dk_cfsNavigation_legend']	= 'Navigation';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['dk_cfsType']					= array('Betriebsart', 'Bitte wählen Sie die Betriebsart des carouFredSel-Elements.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStart']				= array('Umschlag-Anfang', 'Markiert den Anfang eines carouFredSel-Karussells, das mehrere Inhaltselemente umfasst.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStop']					= array('Umschlag-Ende', 'Markiert das Ende eines carouFredSel-Karussells, das mehrere Inhaltselemente umfasst.');

// --- play behaviour
$GLOBALS['TL_LANG']['tl_content']['dk_cfsUsePlay']				= array('Abspielverhalten', 'Laufrichtung, Art, automatisches Abspielen, Anzeigedauer, Verzögerung, Maus-Hover.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsDirection']			= array('Laufrichtung', 'Die Bewegungsrichtung des Karussells.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsCarouselType']			= array('Art', 'Die Art wie die Elemente abgespielt werden.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollItems']			= array('Elemente', 'Anzahl der gleichzeitig zu scrollenden Elemente. Geben Sie 0 ein um die Anzahl der sichtbaren Elemente zu scrollen.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoPlay']				= array('automatisches Abspielen', 'Bestimmt, ob das Karussell automatisch scrollen soll oder nicht.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoTimeoutDuration']	= array('Anzeigedauer', 'Bestimmt die Dauer der Anzeige der Elemente bevor erneut gescrollt wird in Millisekunden.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoDelay']			= array('Verzögerung', 'Bestimmt die Dauer der Scroll-Verzögerung beim ersten Element in Millisekunden. Die Zahl darf auch negativ sein.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollPauseOnHover']	= array('Pause bei Maus-Hover', 'Bestimmt, ob das Karusell bei Maus-Hover pausiert und wie der Übergangs-Effekt im Anschluß weiterläuft.');

// --- transistions
$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseTransitions']		= array('Übergangs-Effekte', 'Übergangs-Effekt, Abschwächungs-Funktion, Übergangs-Dauer');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollFx']				= array('Übergangs-Effekt', 'Bestimmt den Effekt beim Scrollen eines Elements.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollEasing']			= array('Abschwächungs-Funktion', 'Bestimmt die Abschwächungs-Funktion, die auf den Übergang angewandt wird.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsScrollDuration']		= array('Übergangs-Dauer', 'Bestimmt die Dauer des Übergangs in Millisekunden. Werte kleiner 10 werden als Geschwindigkeit interpretiert (Pixel/Millisekunde).');

// --- general size
$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseGeneralSize']		= array('Größe des Karussells', 'Breite, Höhe, Padding, Ausrichtung der Elemente.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsWidthSelect']			= array('Art der Breite', 'Bestimmt die Art wie die Breite des Karussells bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsWidth']				= array('Breite', 'Bestimmt die Breite des Karussells in Abhängigkeit der gewählten Art.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsHeightSelect']			= array('Art der Höhe', 'Bestimmt die Art wie die Höhe des Karussells bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsHeight']				= array('Höhe', 'Bestimmt die Höhe des Karussells in Abhängigkeit der gewählten Art.');
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
$GLOBALS['TL_LANG']['tl_content']['dk_cfsCookie']				= array('Abspiel-Position merken', 'Bestimmt, ob das Karussell an der letzten sichtbaren Position starten soll.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisibleSelect']	= array('Anzahl sichtbarer Elemente', 'Bestimmt die Art wie die Anzahl der sichtbaren Elemente bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisible']			= array('gleichzeitig sichtbare Elemente', 'Anzahl der gleichzeitig sichtbaren Elemente.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisibleMin']		= array('Minimale Anzahl', 'Minimale Anzahl an Elementen, die sichtbar sein sollen.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsVisibleMax']		= array('Maximale Anzahl', 'Maximale Anzahl an Elementen, die sichtbar sein sollen.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsStart']			= array('Nummer des Start-Elements', 'Nummer des Elements, das am Anfang steht. Geben Sie 0 ein um dies automatisch berechnen zu lassen. Die Nummer darf auch negativ sein.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsItemsStartRnd']		= array('zufälliges Start-Element', 'Bestimmt, ob das Start-Element zufällig aus den vorhandenen gewählt wird.');

// --- navigation
$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseNavigation']		= array('Navigation', 'Tasten, Mausrad, Wischgeste, Anzeige der Navigation, Anzeige der Pagination.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPrevKey']				= array('Taste für vorherige(s) Element(e)', 'Bestimmt mit welcher Taste zurück gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsNextKey']				= array('Taste für nächste(s) Element(e)', 'Bestimmt mit welcher Taste vorwärts gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsMousewheel']			= array('Scrollen per Mausrad', 'Bestimmt, ob das Karussell auch per Mausrad gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsSwipeOnTouch']			= array('Scrollen per Wischgeste', 'Bestimmt, ob das Karussell auch per Wischgeste gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsSwipeOnMouse']			= array('Scrollen per Mausziehen', 'Bestimmt, ob das Karussell auch per Mausziehen gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsNavigation']			= array('Navigation einblenden', 'Bestimmt, ob visuelle Navigations-Elemente eingeblendet werden sollen.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsAutoButton']			= array('"Play/Pause"-Button einblenden', 'Bestimmt, ob ein Button eingeblendet wird mit dem das Scrollen pausiert und fortgesetzt werden kann.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPagination']			= array('Pagination einblenden', 'Bestimmt, ob eine visuelle Pagination eingeblendet werden soll.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsPaginationKeys']		= array('Pagination mit Tasten 1-9 anwählbar', 'Bestimmt, ob die Pagination mit der Tastatur bedienbar ist. ');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsHTMLTpl']				= array('HTML-Template', 'Hier können Sie das HTML-Template auswählen.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsJsTpl']				= array('JavaScript-Template', 'Hier können Sie das JavaScript-Template auswählen.');

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['left']						= 'links';
$GLOBALS['TL_LANG']['tl_content']['right']						= 'rechts';
$GLOBALS['TL_LANG']['tl_content']['up']							= 'hoch';
$GLOBALS['TL_LANG']['tl_content']['down']						= 'runter';
$GLOBALS['TL_LANG']['tl_content']['circular']					= 'kreisförmig';
$GLOBALS['TL_LANG']['tl_content']['infinite']					= 'unendlich';
$GLOBALS['TL_LANG']['tl_content']['once']						= 'einmal';
$GLOBALS['TL_LANG']['tl_content']['variable']					= 'variabel';
$GLOBALS['TL_LANG']['tl_content']['auto']						= 'automatisch';
$GLOBALS['TL_LANG']['tl_content']['fixed']						= 'fest';
$GLOBALS['TL_LANG']['tl_content']['fluid']						= 'flüssig';
$GLOBALS['TL_LANG']['tl_content']['center']						= 'zentriert';
$GLOBALS['TL_LANG']['tl_content']['none']						= 'kein';
$GLOBALS['TL_LANG']['tl_content']['restart']					= 'neu starten';
$GLOBALS['TL_LANG']['tl_content']['resume']						= 'fortsetzen';
$GLOBALS['TL_LANG']['tl_content']['immediate']					= 'sofort';
$GLOBALS['TL_LANG']['tl_content']['immediate-resume']			= 'sofort + fortsetzen';

<?php

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
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['new']					= array('Neues Karussell', 'Ein neues Karussell anlegen');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['edit']					= array('Karussell bearbeiten', 'Karussell ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['copy']					= array('Karussell duplizieren', 'Karussell ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['delete']					= array('Karussell löschen', 'Karussell ID %s löschen');
//$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['toggle']				= array('Karussell veröffentlichen/unveröffentlichen', 'Karussell ID %s veröffentlichen/unveröffentlichen');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['show']					= array('Karusselldetails', 'Details des Karussells ID %s anzeigen');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['play_legend']			= 'Play behaviour';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['transistion_legend']		= 'Transitions';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['generalSize_legend']		= 'Size/Alignment of carousel';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsSize_legend']		= 'Size of items';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsGeneral_legend']	= 'Darstellung der Elemente';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['navigation_legend']		= 'Navigation';


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['title']					= array('Name des Karussells', 'Bestimmen Sie hier den Namen des Karusells über den Sie es an anderer Stelle auswählen können.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['tstamp']					= array('Änderungsdatum', 'Datum und Uhrzeit der letzten Änderung.');

// --- play behaviour
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['usePlay']				= array('Play behaviour', 'Laufrichtung, Art, automatisches Abspielen, Anzeigedauer, Verzögerung, Maus-Hover.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']				= array('Direction', 'Scroll direction of the carousel.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['carouselType']			= array('Type', 'Die Art wie die Elemente abgespielt werden.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollItems']			= array('Items', 'The number of items to scroll. If 0, the number of visible items is used.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoPlay']				= array('auto play', 'Determines whether the carousel should scroll automatically or not.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoTimeoutDuration']	= array('Duration', 'The amount of milliseconds the carousel will pause.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoDelay']				= array('Delay', 'Additional delay in milliseconds before the carousel starts scrolling the first time. This can also be a negative number.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']		= array('Pause on hover', 'Determines whether the timeout between transitions should be paused on mouse hover and how the transition will be handled afterwards.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgress']			= array('Fortschritts-Balken einblenden', 'Bestimmt, ob ein visueller Balken eingeblendet wird, der durch seinen Füllstand anzeigt wann erneut gescrollt wird.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgressInterval']	= array('Aktualisierungs-Intervall', 'Bestimmt den zeitlichen Abstand mit dem der Füllstand aktualisiert wird in Millisekunden.');

// --- transistions
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useTransitions']			= array('Transition effects', 'Transition, Easing, Duration');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollFx']				= array('Transition', 'Indicates which effect to use for the transition.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollEasing']			= array('Easing', 'Indicates which easing function to use for the transition.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollDuration']			= array('Duration', 'Determines the duration of the transition in milliseconds. If less than 10, the number is interpreted as a speed (pixel/millisecond)');

// --- general size
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useGeneralSize']			= array('Größe des Karussells', 'Breite, Höhe, Padding, Ausrichtung der Elemente.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['widthSelect']			= array('Type of width', 'Bestimmt die Art wie die Breite des Karussells bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['width']					= array('Width', 'Bestimmt die Breite des Karussells in Abhängigkeit der gewählten Art.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['heightSelect']			= array('Type of height', 'Bestimmt die Art wie die Höhe des Karussells bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['height']					= array('Height', 'Bestimmt die Höhe des Karussells in Abhängigkeit der gewählten Art.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['padding']				= array('Padding', 'Bestimmt den Innenabstand des gesammten Karussells.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']					= array('Ausrichtung der Elemente', 'Bestimmt die Ausrichtung der Elemente innerhalb des Karussells. Wird dies abgeschaltet kann sich die Anzahl der sichtbaren Elemente von der eingestellten unterscheiden.');

// --- items size
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useItemsSize']			= array('Größe der Elemente', 'Breite, Höhe.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsWidthSelect']		= array('Art der Breite', 'Bestimmt die Art wie die Breite der Elemente bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsWidth']				= array('Breite', 'Bestimmt die Breite der Elemente in Abhängigkeit der gewählten Art.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsHeightSelect']		= array('Art der Höhe', 'Bestimmt die Art wie die Höhe der Elemente bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsHeight']			= array('Höhe', 'Bestimmt die Höhe der Elemente in Abhängigkeit der gewählten Art.');

// --- items general
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useItemsGeneral']		= array('Darstellung der Elemente', 'Responsive, Anzahl sichtbarer Elemente, Start-Element, Start-Element zufällig.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['responsive']				= array('Responsive', 'Bestimmt, ob die Elemente automatisch in ihrer Größe angepaßt werden.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['cookie']					= array('Saved position', 'Determines whether the carousel should start at its last viewed position.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']		= array('Anzahl sichtbarer Elemente', 'Bestimmt die Art wie die Anzahl der sichtbaren Elemente bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisible']			= array('number of visible items', 'The number of visible items.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleMin']		= array('Minimale Anzahl', 'Minimale Anzahl an Elementen, die sichtbar sein sollen.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleMax']		= array('Maximale Anzahl', 'Maximale Anzahl an Elementen, die sichtbar sein sollen.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStart']				= array('number of start element', 'The nth item to start the carousel. If 0, the first one will be used. This can also be a negative number.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStartRnd']			= array('random start element', 'Bestimmt, ob das Start-Element zufällig aus den vorhandenen gewählt wird.');

// --- navigation
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useNavigation']			= array('Navigation', 'Tasten, Mausrad, Wischgeste, Anzeige der Navigation, Anzeige der Pagination.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']				= array('Key to scroll backward', 'Bestimmt mit welcher Taste zurück gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']				= array('Key to scroll forward', 'Bestimmt mit welcher Taste vorwärts gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['mousewheel']				= array('Scrolling by mousewheel', 'Determines wether the carousel is scrolled by mousewheel.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['swipeOnTouch']			= array('Scrolling by wipe action', 'Determines wether the carousel is scrolled by wipe action.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['swipeOnMouse']			= array('Scrolling by mouse dragging', 'Determines wether the carousel is scrolled by mouse dragging.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['navigation']				= array('show navigation', 'Bestimmt, ob visuelle Navigations-Elemente eingeblendet werden sollen.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoButton']				= array('"Play/Pause"-Button einblenden', 'Bestimmt, ob ein Button eingeblendet wird mit dem das Scrollen pausiert und fortgesetzt werden kann.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['pagination']				= array('show pagination', 'Bestimmt, ob eine visuelle Pagination eingeblendet werden soll.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['paginationKeys']			= array('pagination can be controlled via keys 1-9', 'Bestimmt, ob die Pagination mit der Tastatur bedienbar ist. ');


/**
 * References
 */
/*$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['left']						= 'left';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['right']						= 'right';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['up']						= 'up';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['down']						= 'down';*/

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['circular']								= array('circular', 'Beim Erreichen des letzten Elements wird (von vorne) weitergescrollt als wenn kein letztes Element vorhanden wäre.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['infinite']								= array('infinite', 'Beim Erreichen des letzten Elements wird zurückgespult und erneut begonnen.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['once']									= array('once', 'Beim Erreichen des letzten Elements wird angehalten.');

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['none']				= array('keine', 'Es wird unabhängig davon gescrollt, ob sich die Maus über dem Karussell befindet oder nicht.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['restart']			= array('Pause + Anzeigedauer neu starten', 'Bei Maus-Hover pausiert das Karussell. Im Anschluß wird die bisherige Anzeigedauer zurückgesetzt und es wird erst nach der kompletten Anzeigedauer erneut gescrollt.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['resume']			= array('Pause + Anzeigedauer fortsetzen', 'Bei Maus-Hover pausiert das Karussell. Im Anschluß wird die bisherige Anzeigedauer mit der verbliebenen Restzeit bis zum erneuten Scrollen fortgesetzt.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['immediate']		= array('sofortiger Stop + Anzeigedauer neu starten', 'Bei Maus-Hover stoppt das Karussell sofort. Im Anschluß wird die bisherige Anzeigedauer zurückgesetzt und es wird erst nach der kompletten Anzeigedauer erneut gescrollt.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['immediate-resume']	= array('sofortiger Stop + Anzeigedauer fortsetzen', 'Bei Maus-Hover stoppt das Karussell sofort. Im Anschluß wird die bisherige Anzeigedauer mit der verbliebenen Restzeit bis zum erneuten Scrollen fortgesetzt');

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['none']							= array('none', '');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['center']						= array('denter', '');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['left']							= array('left/top', '');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['right']							= array('right/bottom', '');

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['variable']			= array('variable', 'Die Anzahl der sichtbaren Elemente wird automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['fixed']			= array('fixed', 'Die Anzahl der sichtbaren Elemente wird fest vorgegeben.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['min/max']			= array('min/max', 'Die minimale und/oder maximale Anzahl an sichtbaren Elementen kann festgelegt werden.');

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['none']						= 'none';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['left']						= 'Cursor left';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['right']						= 'Cursor right';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['up']							= 'Cursor up';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['down']						= 'Cursor down';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['none']						= 'none';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['left']						= 'Cursor left';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['right']						= 'Cursor right';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['up']							= 'Cursor up';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['down']						= 'Cursor down';


/**
 * References for dynamic calculated selects
 */
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['variable']			= array('variable', 'Die Breite des Karussells richtet sich nach der Breite der sichtbaren Elemente.');
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['auto']				= array('auto', 'Die Breite des Karussells richtet sich nach der Breite des breitesten aller Elemente.');
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['fixed']				= array('fixed', 'Die Breite des Karussells wird fest in Pixeln angegeben. Unabhängig der Fenstergröße behält es diese bei.');
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['fluid']				= array('fluid', 'Die Breite des Karussells wird variabel in Prozent angegeben. Abhängig der Fenstergröße wächst oder schrumpft es. Nur verfügbar bei horizontalen Karussells.');
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['variable']			= array('variable', 'Die Höhe des Karussells richtet sich nach der Höhe der sichtbaren Elemente.');
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['auto']				= array('auto', 'Die Höhe des Karussells richtet sich nach der Höhe des höchsten aller Elemente.');
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['fixed']				= array('fixed', 'Die Höhe des Karussells wird fest in Pixeln angegeben. Unabhängig der Fenstergröße behält es diese bei.');
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['fluid']				= array('fluid', 'Die Höhe des Karussells wird variabel in Prozent angegeben. Abhängig der Fenstergröße wächst oder schrumpft es. Nur verfügbar bei vertikalen Karussells.');

$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['variable']		= array('variable', 'Die Breite der Elemente ist unterschiedlich.');
$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['fixed']			= array('fixed', 'Die Breite der Elemente wird fest in Pixeln angegeben.');
$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['fluid']			= array('fluid', 'Die Breite der Elemente wird variabel in Prozent angegeben. Nur verfügbar bei vertikalen Karussells und dem Modus "Responsive".');

$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['variable']		= array('variable', 'Die Höhe der Elemente ist unterschiedlich.');
$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['fixed']			= array('fixed', 'Die Höhe der Elemente wird fest in Pixeln angegeben.');
$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['fluid']			= array('fluid', 'Die Höhe der Elemente wird variabel in Prozent angegeben. Nur verfügbar bei horizontalen Karussells und dem Modus "Responsive".');

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
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['play_legend']			= 'Abspielverhalten';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['transistion_legend']		= 'Übergangs-Effekte';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['generalSize_legend']		= 'Abmessung/Ausrichtung des Karussells';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsSize_legend']		= 'Abmessung der Elemente';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsGeneral_legend']	= 'Darstellung der Elemente';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['navigation_legend']		= 'Navigation';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['title']					= array('Name des Karussells', 'Bestimmen Sie hier den Namen des Karusells über den Sie es an anderer Stelle auswählen können.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['tstamp']					= array('Änderungsdatum', 'Datum und Uhrzeit der letzten Änderung.');

// --- play behaviour
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['usePlay']				= array('Abspielverhalten', 'Laufrichtung, Art, automatisches Abspielen, Anzeigedauer, Verzögerung, Maus-Hover, Fortschritts-Balken');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']				= array('Laufrichtung', 'Die Bewegungsrichtung des Karussells.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['carouselType']			= array('Art', 'Die Art wie die Elemente abgespielt werden.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollItems']			= array('Elemente', 'Anzahl der gleichzeitig zu scrollenden Elemente. Geben Sie 0 ein um die Anzahl der sichtbaren Elemente zu scrollen.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoPlay']				= array('automatisches Abspielen', 'Bestimmt, ob das Karussell automatisch scrollen soll oder nicht.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoTimeoutDuration']	= array('Anzeigedauer', 'Bestimmt die Dauer der Anzeige der Elemente bevor erneut gescrollt wird in Millisekunden.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoDelay']				= array('Verzögerung', 'Bestimmt die Dauer der Scroll-Verzögerung beim ersten Element in Millisekunden. Die Zahl darf auch negativ sein.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']		= array('Pause bei Maus-Hover', 'Bestimmt, ob das Karusell bei Maus-Hover pausiert und wie die Anzeigedauer im Anschluß gehandhabt wird.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgress']			= array('Fortschritts-Balken einblenden', 'Bestimmt, ob ein visueller Balken eingeblendet wird, der durch seinen Füllstand anzeigt wann erneut gescrollt wird.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgressInterval']	= array('Aktualisierungs-Intervall', 'Bestimmt den zeitlichen Abstand mit dem der Füllstand aktualisiert wird in Millisekunden.');

// --- transistions
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useTransitions']			= array('Übergangs-Effekte', 'Übergangs-Effekt, Abschwächungs-Funktion, Übergangs-Dauer');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollFx']				= array('Übergangs-Effekt', 'Bestimmt den Effekt beim Scrollen eines Elements.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollEasing']			= array('Abschwächungs-Funktion', 'Bestimmt die Abschwächungs-Funktion, die auf den Übergang angewandt wird.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollDuration']			= array('Übergangs-Dauer', 'Bestimmt die Dauer des Übergangs in Millisekunden. Werte kleiner 10 werden als Geschwindigkeit interpretiert (Pixel/Millisekunde).');

// --- general size
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useGeneralSize']			= array('Größe des Karussells', 'Breite, Höhe, Padding, Ausrichtung der Elemente.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['widthSelect']			= array('Art der Breite', 'Bestimmt die Art wie die Breite des Karussells bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['width']					= array('Breite', 'Bestimmt die Breite des Karussells in Abhängigkeit der gewählten Art.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['heightSelect']			= array('Art der Höhe', 'Bestimmt die Art wie die Höhe des Karussells bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['height']					= array('Höhe', 'Bestimmt die Höhe des Karussells in Abhängigkeit der gewählten Art.');
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
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['cookie']					= array('Abspiel-Position merken', 'Bestimmt, ob das Karussell an der letzten sichtbaren Position starten soll.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']		= array('Anzahl sichtbarer Elemente', 'Bestimmt die Art wie die Anzahl der sichtbaren Elemente bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisible']			= array('gleichzeitig sichtbare Elemente', 'Anzahl der gleichzeitig sichtbaren Elemente.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleMin']		= array('Minimale Anzahl', 'Minimale Anzahl an Elementen, die sichtbar sein sollen.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleMax']		= array('Maximale Anzahl', 'Maximale Anzahl an Elementen, die sichtbar sein sollen.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStart']				= array('Nummer des Start-Elements', 'Nummer des Elements, das am Anfang steht. Geben Sie 0 ein um dies automatisch berechnen zu lassen. Die Nummer darf auch negativ sein.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStartRnd']			= array('zufälliges Start-Element', 'Bestimmt, ob das Start-Element zufällig aus den vorhandenen gewählt wird.');

// --- navigation
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useNavigation']			= array('Navigation', 'Tasten, Mausrad, Wischgeste, Anzeige der Navigation, Anzeige der Pagination.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']				= array('Taste für vorherige(s) Element(e)', 'Bestimmt mit welcher Taste zurück gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']				= array('Taste für nächste(s) Element(e)', 'Bestimmt mit welcher Taste vorwärts gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['mousewheel']				= array('Scrollen per Mausrad', 'Bestimmt, ob das Karussell auch per Mausrad gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['swipeOnTouch']			= array('Scrollen per Wischgeste', 'Bestimmt, ob das Karussell auch per Wischgeste gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['swipeOnMouse']			= array('Scrollen per Mausziehen', 'Bestimmt, ob das Karussell auch per Mausziehen gescrollt werden kann.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['navigation']				= array('Navigation einblenden', 'Bestimmt, ob visuelle Navigations-Elemente eingeblendet werden sollen.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoButton']				= array('"Play/Pause"-Button einblenden', 'Bestimmt, ob ein Button eingeblendet wird mit dem das Scrollen pausiert und fortgesetzt werden kann.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['pagination']				= array('Pagination einblenden', 'Bestimmt, ob eine visuelle Pagination eingeblendet werden soll.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['paginationKeys']			= array('Pagination mit Tasten 1-9 anwählbar', 'Bestimmt, ob die Pagination mit der Tastatur bedienbar ist. ');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['left']						= 'links';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['right']						= 'rechts';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['up']						= 'hoch';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['down']						= 'runter';

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['circular']								= array('kreisförmig', 'Beim Erreichen des letzten Elements wird (von vorne) weitergescrollt als wenn kein letztes Element vorhanden wäre.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['infinite']								= array('unendlich', 'Beim Erreichen des letzten Elements wird zurückgespult und erneut begonnen.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['once']									= array('einmal', 'Beim Erreichen des letzten Elements wird angehalten.');

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['none']				= array('keine', 'Es wird unabhängig davon gescrollt, ob sich die Maus über dem Karussell befindet oder nicht.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['restart']			= array('Pause + Anzeigedauer neu starten', 'Bei Maus-Hover pausiert das Karussell. Im Anschluß wird die bisherige Anzeigedauer zurückgesetzt und es wird erst nach der kompletten Anzeigedauer erneut gescrollt.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['resume']			= array('Pause + Anzeigedauer fortsetzen', 'Bei Maus-Hover pausiert das Karussell. Im Anschluß wird die bisherige Anzeigedauer mit der verbliebenen Restzeit bis zum erneuten Scrollen fortgesetzt.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['immediate']		= array('sofortiger Stop + Anzeigedauer neu starten', 'Bei Maus-Hover stoppt das Karussell sofort. Im Anschluß wird die bisherige Anzeigedauer zurückgesetzt und es wird erst nach der kompletten Anzeigedauer erneut gescrollt.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['immediate-resume']	= array('sofortiger Stop + Anzeigedauer fortsetzen', 'Bei Maus-Hover stoppt das Karussell sofort. Im Anschluß wird die bisherige Anzeigedauer mit der verbliebenen Restzeit bis zum erneuten Scrollen fortgesetzt');

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['none']							= array('keine', '');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['center']						= array('zentriert', '');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['left']							= array('links/oben', '');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['right']							= array('rechts/unten', '');

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['variable']			= array('variabel', 'Die Anzahl der sichtbaren Elemente wird automatisch berechnet.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['fixed']			= array('fest', 'Die Anzahl der sichtbaren Elemente wird fest vorgegeben.');
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['min/max']			= array('min/max', 'Die minimale und/oder maximale Anzahl an sichtbaren Elementen kann festgelegt werden.');

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['none']						= 'keine';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['left']						= 'Cursor links';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['right']						= 'Cursor rechts';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['up']							= 'Cursor hoch';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['down']						= 'Cursor runter';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['none']						= 'keine';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['left']						= 'Cursor links';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['right']						= 'Cursor rechts';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['up']							= 'Cursor hoch';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['down']						= 'Cursor runter';


/**
 * References for dynamic calculated selects
 */
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['variable']			= array('variabel', 'Die Breite des Karussells richtet sich nach der Breite der sichtbaren Elemente.');
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['auto']				= array('automatisch', 'Die Breite des Karussells richtet sich nach der Breite des breitesten aller Elemente.');
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['fixed']				= array('fest', 'Die Breite des Karussells wird fest in Pixeln angegeben. Unabhängig der Fenstergröße behält es diese bei.');
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['fluid']				= array('flüssig', 'Die Breite des Karussells wird variabel in Prozent angegeben. Abhängig der Fenstergröße wächst oder schrumpft es. Nur verfügbar bei horizontalen Karussells.');
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['variable']			= array('variabel', 'Die Höhe des Karussells richtet sich nach der Höhe der sichtbaren Elemente.');
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['auto']				= array('automatisch', 'Die Höhe des Karussells richtet sich nach der Höhe des höchsten aller Elemente.');
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['fixed']				= array('fest', 'Die Höhe des Karussells wird fest in Pixeln angegeben. Unabhängig der Fenstergröße behält es diese bei.');
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['fluid']				= array('flüssig', 'Die Höhe des Karussells wird variabel in Prozent angegeben. Abhängig der Fenstergröße wächst oder schrumpft es. Nur verfügbar bei vertikalen Karussells.');

$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['variable']		= array('variabel', 'Die Breite der Elemente ist unterschiedlich.');
$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['fixed']			= array('fest', 'Die Breite der Elemente wird fest in Pixeln angegeben.');
$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['fluid']			= array('flüssig', 'Die Breite der Elemente wird variabel in Prozent angegeben. Nur verfügbar bei vertikalen Karussells und dem Modus "Responsive".');

$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['variable']		= array('variabel', 'Die Höhe der Elemente ist unterschiedlich.');
$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['fixed']			= array('fest', 'Die Höhe der Elemente wird fest in Pixeln angegeben.');
$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['fluid']			= array('flüssig', 'Die Höhe der Elemente wird variabel in Prozent angegeben. Nur verfügbar bei horizontalen Karussells und dem Modus "Responsive".');

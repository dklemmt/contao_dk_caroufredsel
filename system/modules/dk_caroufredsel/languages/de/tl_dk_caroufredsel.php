<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2015 Leo Feyer
 * 
 * @package   carouFredSel
 * @author    Dirk Klemmt
 * @license   MIT/GPL
 * @copyright Dirk Klemmt 2012-2015
 */


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['new'][0] = 'Neues Karussell';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['new'][1] = 'Ein neues Karussell anlegen';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['edit'][0] = 'Karussell-Inhalt bearbeiten';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['edit'][1] = 'Inhalt zu Karussell (ID %s) bearbeiten';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['editheader'][0] = 'Karussell-Konfiguration bearbeiten';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['editheader'][1] = 'Konfiguration von Karussell (ID %s) bearbeiten';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['copy'][0] = 'Karussell duplizieren';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['copy'][1] = 'Karussell (ID %s) duplizieren';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['delete'][0] = 'Karussell löschen';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['delete'][1] = 'Karussell (ID %s) löschen';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['show'][0] = 'Karussell-Details';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['show'][1] = 'Details des Karussells (ID %s) anzeigen';


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['play_legend'] = 'Abspielverhalten';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['transistion_legend'] = 'Übergangs-Effekte';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['generalSize_legend'] = 'Abmessung/Ausrichtung des Karussells';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsSize_legend'] = 'Abmessung der Elemente';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsGeneral_legend'] = 'Darstellung der Elemente';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['navigation_legend'] = 'Navigation';


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['title'][0] = 'Name des Karussells';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['title'][1] = 'Bestimmen Sie hier den Namen der Karusell-Konfiguration über den Sie sie an anderer Stelle auswählen können.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['tstamp'][0] = 'Änderungsdatum';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['tstamp'][1] = 'Datum und Uhrzeit der letzten Änderung.';

// --- play behaviour
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['usePlay'][0] = 'Abspielverhalten';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['usePlay'][1] = 'Hier können Einstellungen bzgl. des Abspielverhaltens wie z.B. der Laufrichtung oder der Anzeigedauer vorgenommen werden.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction'][0] = 'Laufrichtung';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction'][1] = 'Die Bewegungsrichtung des Karussells.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['carouselType'][0] = 'Art';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['carouselType'][1] = 'Die Art wie die Elemente abgespielt werden.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollItems'][0] = 'Elemente';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollItems'][1] = 'Anzahl der gleichzeitig zu scrollenden Elemente. Geben Sie 0 ein um die Anzahl der sichtbaren Elemente zu scrollen.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollQueue'][0] = 'Warteschlange';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollQueue'][1] = 'Bestimmt wie mit weiteren eintreffenden Scroll-Ereignissen verfahren wird, während das Karussell scrollt.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoPlay'][0] = 'automatisches Abspielen';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoPlay'][1] = 'Bestimmt, ob das Karussell automatisch scrollen soll oder nicht.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoTimeoutDuration'][0]	= 'Anzeigedauer';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoTimeoutDuration'][1]	= 'Bestimmt die Dauer der Anzeige der Elemente bevor erneut gescrollt wird in Millisekunden.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoDelay'][0] = 'Verzögerung';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoDelay'][1] = 'Bestimmt die Dauer der Scroll-Verzögerung beim ersten Element in Millisekunden. Die Zahl darf auch negativ sein.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover'][0] = 'Pause bei Maus-Hover';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover'][1] = 'Bestimmt, ob das Karusell bei Maus-Hover pausiert und wie die Anzeigedauer im Anschluß gehandhabt wird.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgress'][0] = 'Fortschritts-Balken einblenden';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgress'][1] = 'Bestimmt, ob ein visuelles Element eingeblendet wird, das durch seinen Füllstand anzeigt wann erneut gescrollt wird.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgressInterval'][0] = 'Aktualisierungs-Intervall';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgressInterval'][1] = 'Bestimmt den zeitlichen Abstand mit dem der Füllstand aktualisiert wird in Millisekunden.';

// --- transistions
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useTransitions'][0] = 'Übergangs-Effekte';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useTransitions'][1] = 'Hier können alle Einstellungen bzgl. der Übergangs-Effekte vorgenommen werden.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollFx'][0] = 'Übergangs-Effekt';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollFx'][1] = 'Bestimmt den Effekt beim Scrollen eines Elements.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollEasing'][0] = 'Abschwächungs-Funktion';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollEasing'][1] = 'Bestimmt die Abschwächungs-Funktion, die auf den Übergang angewandt wird.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollDuration'][0] = 'Übergangs-Dauer';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollDuration'][1] = 'Bestimmt die Dauer des Übergangs in Millisekunden. Werte kleiner 10 werden als Geschwindigkeit interpretiert (Pixel/Millisekunde).';

// --- general size
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useGeneralSize'][0] = 'Größe des Karussells';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useGeneralSize'][1] = 'Hier können Einstellungen bzgl. der Größe des gesamten sichtbaren Karussells wie z.B. der Breite und Höhe vorgenommen werden.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['widthSelect'][0] = 'Art der Breite';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['widthSelect'][1] = 'Bestimmt die Art wie die Breite des Karussells bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['width'][0] = 'Karussell-Breite';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['width'][1] = 'Bestimmt die Breite des Karussells in Abhängigkeit der gewählten Art.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['heightSelect'][0] = 'Art der Höhe';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['heightSelect'][1] = 'Bestimmt die Art wie die Höhe des Karussells bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['height'][0] = 'Karussell-Höhe';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['height'][1] = 'Bestimmt die Höhe des Karussells in Abhängigkeit der gewählten Art.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['padding'][0] = 'Padding';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['padding'][1] = 'Bestimmt den Innenabstand des gesammten Karussells.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align'][0] = 'Ausrichtung der Elemente';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align'][1] = 'Bestimmt die Ausrichtung der Elemente innerhalb des Karussells. Wird dies abgeschaltet kann sich die Anzahl der sichtbaren Elemente von der eingestellten unterscheiden.';

// --- items size
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useItemsSize'][0] = 'Größe der Elemente';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useItemsSize'][1] = 'Hier können Einstellungen bzgl. der Größe der einzelnen Elemente im Karussell wie z.B. der Breite und Höhe vorgenommen werden.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsWidthSelect'][0] = 'Art der Breite';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsWidthSelect'][1] = 'Bestimmt die Art wie die Breite der Elemente bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsWidth'][0] = 'Element-Breite';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsWidth'][1] = 'Bestimmt die Breite der Elemente in Abhängigkeit der gewählten Art.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsHeightSelect'][0] = 'Art der Höhe';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsHeightSelect'][1] = 'Bestimmt die Art wie die Höhe der Elemente bestimmt wird. Wählen Sie nichts wird dies automatisch berechnet.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsHeight'][0] = 'Element-Höhe';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsHeight'][1] = 'Bestimmt die Höhe der Elemente in Abhängigkeit der gewählten Art.';

// --- items general
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useItemsGeneral'][0] = 'Darstellung der Elemente';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useItemsGeneral'][1] = 'Hier können Einstellungen bzgl. der Darstellung der Elemente wie z.B. responsive oder sichtbaren Elemente vorgenommen werden.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['responsive'][0] = 'Responsive';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['responsive'][1] = 'Bestimmt, ob die Elemente automatisch in ihrer Größe angepaßt werden.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['cookie'][0] = 'Abspiel-Position merken';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['cookie'][1] = 'Bestimmt, ob das Karussell an der letzten sichtbaren Position starten soll.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect'][0] = 'Anzahl sichtbarer Elemente';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect'][1] = 'Bestimmt die Art wie die Anzahl der sichtbaren Elemente ermittelt wird. Wählen Sie nichts wird dies automatisch berechnet.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisible'][0] = 'gleichzeitig sichtbare Elemente';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisible'][1] = 'Anzahl der gleichzeitig sichtbaren Elemente.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleMin'][0] = 'Minimale Anzahl';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleMin'][1] = 'Minimale Anzahl an Elementen, die sichtbar sein sollen.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleMax'][0] = 'Maximale Anzahl';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleMax'][1] = 'Maximale Anzahl an Elementen, die sichtbar sein sollen.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStartSelect'][0] = 'Bestimmung des Start-Elements';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStartSelect'][1] = 'Bestimmt wie das Start-Element ermittelt wird. Wählen Sie nichts wird das automatisch berechnet.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStart'][0] = 'Nummer des Start-Elements';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStart'][1] = 'Nummer des Elements, das am Anfang steht. Geben Sie 0 ein um dies automatisch berechnen zu lassen. Die Nummer darf auch negativ sein.';

// --- navigation
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useNavigation'][0] = 'Navigation';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['useNavigation'][1] = 'Hier können Einstellungen bzgl. der Navigation vorgenommen werden.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey'][0] = 'Taste für vorherige(s) Element(e)';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey'][1] = 'Bestimmt mit welcher Taste zurück gescrollt werden kann.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey'][0] = 'Taste für nächste(s) Element(e)';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey'][1] = 'Bestimmt mit welcher Taste vorwärts gescrollt werden kann.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['mousewheel'][0] = 'Scrollen per Mausrad';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['mousewheel'][1] = 'Bestimmt, ob das Karussell auch per Mausrad gescrollt werden kann.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['swipeOnTouch'][0] = 'Scrollen per Wischgeste';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['swipeOnTouch'][1] = 'Bestimmt, ob das Karussell auch per Wischgeste gescrollt werden kann.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['swipeOnMouse'][0] = 'Scrollen per Mausziehen';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['swipeOnMouse'][1] = 'Bestimmt, ob das Karussell auch per Mausziehen gescrollt werden kann.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['navigation'][0] = 'Navigation einblenden';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['navigation'][1] = 'Bestimmt, ob visuelle Navigations-Elemente eingeblendet werden sollen.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoButton'][0] = '"Play/Pause"-Button einblenden';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoButton'][1] = 'Bestimmt, ob ein Button eingeblendet wird mit dem das Scrollen pausiert und fortgesetzt werden kann.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['pagination'][0] = 'Pagination einblenden';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['pagination'][1] = 'Bestimmt, ob eine visuelle Pagination eingeblendet werden soll.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['paginationKeys'][0] = 'Pagination mit Tasten 1-9 anwählbar';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['paginationKeys'][1] = 'Bestimmt, ob die Pagination mit der Tastatur bedienbar ist. ';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['left'] = 'links';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['right'] = 'rechts';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['up'] = 'hoch';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['direction']['down'] = 'runter';

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['circular'][0] = 'kreisförmig';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['circular'][1] = 'Beim Erreichen des letzten Elements wird (von vorne) weitergescrollt als wenn kein letztes Element vorhanden wäre.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['infinite'][0] = 'unendlich';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['infinite'][1] = 'Beim Erreichen des letzten Elements wird zurückgespult und erneut begonnen.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['once'][0] = 'einmal';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['once'][1] = 'Beim Erreichen des letzten Elements wird angehalten.';

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollQueue']['none'][0] = 'keine';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollQueue']['none'][1] = 'Alle eintreffenden Scroll-Ereignisse während des Scrollens werden ignoriert.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollQueue']['all'][0] = 'alle';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollQueue']['all'][1] = 'Alle eintreffenden Scroll-Ereignisse während des Scrollens werden vermerkt und nacheinander ausgeführt.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollQueue']['first'][0] = 'nur erstes';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollQueue']['first'][1] = 'Nur das erste eintreffende Scroll-Ereigniss während des Scrollens wird vermerkt und im Anschluß ausgeführt.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollQueue']['last'][0] = 'nur letztes';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollQueue']['last'][1] = 'Nur das letzte eintreffende Scroll-Ereigniss während des Scrollens wird vermerkt und im Anschluß ausgeführt.';

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['none'][0] = 'keine';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['none'][1] = 'Es wird unabhängig davon gescrollt, ob sich die Maus über dem Karussell befindet oder nicht.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['restart'][0] = 'Pause + Anzeigedauer neu starten';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['restart'][1] = 'Bei Maus-Hover pausiert das Karussell. Im Anschluß wird die bisherige Anzeigedauer zurückgesetzt und es wird erst nach der kompletten Anzeigedauer erneut gescrollt.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['resume'][0] = 'Pause + Anzeigedauer fortsetzen';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['resume'][1] = 'Bei Maus-Hover pausiert das Karussell. Im Anschluß wird die bisherige Anzeigedauer mit der verbliebenen Restzeit bis zum erneuten Scrollen fortgesetzt.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['immediate'][0] = 'sofortiger Stop + Anzeigedauer neu starten';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['immediate'][1] = 'Bei Maus-Hover stoppt das Karussell sofort. Im Anschluß wird die bisherige Anzeigedauer zurückgesetzt und es wird erst nach der kompletten Anzeigedauer erneut gescrollt.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['immediate-resume'][0] = 'sofortiger Stop + Anzeigedauer fortsetzen';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['scrollPauseOnHover']['immediate-resume'][1] = 'Bei Maus-Hover stoppt das Karussell sofort. Im Anschluß wird die bisherige Anzeigedauer mit der verbliebenen Restzeit bis zum erneuten Scrollen fortgesetzt';

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgress']['none'][0] = 'kein';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgress']['none'][1] = 'Die Fortschritts-Anzeige ist ausgeblendet.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgress']['bar'][0] = 'Balken';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgress']['bar'][1] = 'Es wird ein Fortschritts-Balken eingeblendet.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgress']['pie'][0] = 'Kreis';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['autoProgress']['pie'][1] = 'Es wird ein Kreis-Diagramm eingeblendet. Dies steht nur im Ausgabeformat \'HTML\' zur Verfügung.';

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['none'] = 'keine';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['center'] = 'zentriert';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['left'] = 'links/oben';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['align']['right'] = 'rechts/unten';

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['variable'][0] = 'variabel';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['variable'][1] = 'Die Anzahl der sichtbaren Elemente wird automatisch berechnet.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['fixed'][0] = 'fest';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['fixed'][1] = 'Die Anzahl der sichtbaren Elemente wird fest vorgegeben.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['min/max'][0] = 'min/max';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsVisibleSelect']['min/max'][1] = 'Die minimale und/oder maximale Anzahl an sichtbaren Elementen kann festgelegt werden.';

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStartSelect']['number'][0] = 'Nummer';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStartSelect']['number'][1] = 'Das Start-Element wird fest vorgegeben.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStartSelect']['random'][0] = 'zufällig';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStartSelect']['random'][1] = 'Das Start-Element wird aus allen vorhandenen Elementen zufällig ermittelt.';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStartSelect']['anchor'][0] = 'Anker';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['itemsStartSelect']['anchor'][1] = 'Das Start-Element wird durch die URL bestimmt in der Form: http://domain.com#startitem.';

$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['none'] = 'keine';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['left'] = 'Cursor links';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['right'] = 'Cursor rechts';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['up'] = 'Cursor hoch';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['prevKey']['down'] = 'Cursor runter';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['none'] = 'keine';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['left'] = 'Cursor links';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['right'] = 'Cursor rechts';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['up'] = 'Cursor hoch';
$GLOBALS['TL_LANG']['tl_dk_caroufredsel']['nextKey']['down'] = 'Cursor runter';


/**
 * References for dynamic calculated selects
 */
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['variable'][0] = 'variabel';
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['variable'][1] = 'Die Breite des Karussells richtet sich nach der Breite der sichtbaren Elemente.';
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['auto'][0] = 'automatisch';
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['auto'][1] = 'Die Breite des Karussells richtet sich nach der Breite des breitesten aller Elemente.';
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['fixed'][0] = 'fest';
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['fixed'][1] = 'Die Breite des Karussells wird fest in Pixeln angegeben. Unabhängig der Fenstergröße behält es diese bei.';
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['fluid'][0] = 'flüssig';
$GLOBALS['TL_LANG']['DK_CFS']['widthSelect']['fluid'][1] = 'Die Breite des Karussells wird variabel in Prozent angegeben. Abhängig der Fenstergröße wächst oder schrumpft es. Nur verfügbar bei horizontalen Karussells.';
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['variable'][0] = 'variabel';
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['variable'][1] = 'Die Höhe des Karussells richtet sich nach der Höhe der sichtbaren Elemente.';
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['auto'][0] = 'automatisch';
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['auto'][1] = 'Die Höhe des Karussells richtet sich nach der Höhe des höchsten aller Elemente.';
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['fixed'][0] = 'fest';
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['fixed'][1] = 'Die Höhe des Karussells wird fest in Pixeln angegeben. Unabhängig der Fenstergröße behält es diese bei.';
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['fluid'][0] = 'flüssig';
$GLOBALS['TL_LANG']['DK_CFS']['heightSelect']['fluid'][1] = 'Die Höhe des Karussells wird variabel in Prozent angegeben. Abhängig der Fenstergröße wächst oder schrumpft es. Nur verfügbar bei vertikalen Karussells.';

$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['variable'][0] = 'variabel';
$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['variable'][1] = 'Die Breite der Elemente ist unterschiedlich.';
$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['fixed'][0] = 'fest';
$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['fixed'][1] = 'Die Breite der Elemente wird fest in Pixeln angegeben.';
$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['fluid'][0] = 'flüssig';
$GLOBALS['TL_LANG']['DK_CFS']['itemsWidthSelect']['fluid'][1] = 'Die Breite der Elemente wird variabel in Prozent angegeben. Nur verfügbar bei vertikalen Karussells und dem Modus "Responsive".';

$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['variable'][0] = 'variabel';
$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['variable'][1] = 'Die Höhe der Elemente ist unterschiedlich.';
$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['fixed'][0] = 'fest';
$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['fixed'][1] = 'Die Höhe der Elemente wird fest in Pixeln angegeben.';
$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['fluid'][0] = 'flüssig';
$GLOBALS['TL_LANG']['DK_CFS']['itemsHeightSelect']['fluid'][1] = 'Die Höhe der Elemente wird variabel in Prozent angegeben. Nur verfügbar bei horizontalen Karussells und dem Modus "Responsive".';

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
 * Legends
 */
$GLOBALS['TL_LANG']['tl_settings']['caroufredsel_legend']	= 'carouFredSel settings';


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode'][0] = 'Konfigurations-Modus';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode'][1] = 'Bestimmt welche Einstellungen für das Karussell und die zugehörigen Inhalts-Elemente/Module zur Verfügung stehen.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode'][0] = 'carouFredSel-Startmethode';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode'][1] = 'Falls die Elemente keine feste Größe haben kommt es unter Webkit-Browsern unter Umständen dazu, daß diese nicht korrekt dargestellt werden. Es hilft dann das JavaScript zu einem anderen Zeitpunkt zu starten.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize'][0] = 'Verhalten bei Größenänderung des Fensters';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize'][1] = 'Bestimmt, wie auf das "onWindowResize"-Event reagiert wird. Bei jeder Änderung der Fenstergröße wird dieses mehrfach ausgelößt. Dies kann in Abhängigkeit der hinterlegten Funktion und der Menge an Karussells auf der Seite zu zähem/langsamen reagieren führen. Über die Parameter kann das Aufrufverhalten gesteuert werden.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTransition'][0] = 'CSS3 Transitions verwenden';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTransition'][1] = 'Anstelle der jQuery-Animationen werden CSS3 Transitions verwendet. Es wird das jQuery Plugin "jQuery.transit.min.js" eingebunden.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsImageLoader'][0] = 'Image Loader verwenden';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsImageLoader'][1] = 'Bilder im Karussell werden erst nach ihrem vollständigen Laden sanft eingeblendet. Es wird das jQuery Plugin "jquery.krioImageLoader.js" eingebunden.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsDebug'][0] = 'Debugmodus aktivieren';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsDebug'][1] = 'Ist der Debugmodus aktiv werden Debug-Informationen in die Konsole geschrieben.';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode']['basic'][0] = 'basic';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode']['basic'][1] = 'Um die Komplexität zu verringern und mehr Übersichtlichkeit zu erhalten stehen nur die am häufigsten verwendeten Einstellungen zur Verfügung.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode']['advanced'][0] = 'advanced';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode']['advanced'][1] = 'Alle Einstellungen stehen zur Verfügung.';

$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['onDocumentReady'][0] = 'onDocumentReady';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['onDocumentReady'][1] = 'Das Karussell wird initialisiert, sobald das HTML-Dokument geladen und der DOM aufgebaut wurde. Es sind noch nicht alle Inhalte geladen. Webkit-Browser liefern bei nicht/teilweise geladenen Bildern falsche Größen.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['onWindowLoad'][0] = 'onWindowLoad';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['onWindowLoad'][1] = 'Das Karussell wird initialisiert, nachdem ALLE Elemente der Seite geladen wurden. Dies kann unter Umständen länger dauern und zum sichtbareren Aufbau der Seite führen, da die Inhalte vor der Initialisierung schon dargestellt werden.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['readyLoad'][0] = 'readyLoad';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['readyLoad'][1] = 'Diese Erweiterung ist eine Kombination der beiden anderen Modi. Das Karussell wird wie bei onDocumentReady initialisiert und danach kontinuierlich erneut bis nach onWindowLoad. Es wird das jQuery Plugin "jquery.readyLoad.js" eingebunden.';

$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize']['throttle'][0] = 'throttle';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize']['throttle'][1] = 'Die Funktion wird in regelmäßigen Intervallen (alle 200 Millisekunden) aufgerufen.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize']['debounce'][0] = 'debounce';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize']['debounce'][1] = 'Die Funktion wird einmalig (nach 300 Millisekunden) aufgerufen.';

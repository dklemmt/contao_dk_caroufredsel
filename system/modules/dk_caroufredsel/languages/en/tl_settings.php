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
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']		= array('carouFredSel Startmethode', 'Falls die Elemente keine feste Größe haben kommt es unter Webkit-Browsern unter Umständen dazu, daß diese nicht korrekt dargestellt werden. Es hilft dann das JavaScript zu einem anderen Zeitpunkt zu starten.');
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize']	= array('Verhalten bei Größenänderung des Fensters', 'Bestimmt, wie auf das "onWindowResize"-Event reagiert wird. Ändert sich die Fenstergröße wird dieses ausgelößt. Dies kann in Abhängigkeit der Einstellungen und der Menge an Karussells auf der Seite zu zähem/langsamen reagieren führen.');
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTransition']		= array('CSS3 Transitions verwenden', 'Anstelle der jQuery-Animationen werden CSS3 Transitions verwendet. Es wird das jQuery Plugin "jQuery.transit.min.js" eingebunden.');
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsImageLoader']		= array('Image Loader verwenden', 'Bilder im Karussell werden erst nach ihrem vollständigen Laden sanft eingeblendet. Es wird das jQuery Plugin "jquery.krioImageLoader.js" eingebunden.');
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsDebug']			= array('Debugmodus aktivieren', 'Ist der Debugmodus aktiv werden Debug-Informationen in die Konsole geschrieben.');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['onDocumentReady']	= array('onDocumentReady', 'Das Karussell wird initialisiert, sobald das HTML-Dokument geladen und der DOM aufgebaut wurde. Es sind noch nicht alle Inhalte geladen. Webkit-Browser liefern bei nicht/teilweise geladenen Bildern falsche Größen.');
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['onWindowLoad']		= array('onWindowLoad', 'Das Karussell wird initialisiert, nachdem ALLE Elemente der Seite geladen wurden. Dies kann unter Umständen länger dauern und zum sichtbareren Aufbau der Seite führen, da die Inhalte vor der Initialisierung schon dargestellt werden.');
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['readyLoad']		= array('readyLoad', 'Diese Erweiterung ist eine Kombination der beiden anderen Modi. Das Karussell wird wie bei onDocumentReady initialisiert und danach kontinuierlich erneut bis nach onWindowLoad.');

$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize']['throttle']		= array('throttle', 'Die Funktion wird in regelmäßigen Intervallen (alle 200 Millisekunden) aufgerufen.');
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize']['debounce']		= array('debounce', 'Die Funktion wird einmalig (nach 300 Millisekunden) aufgerufen.');

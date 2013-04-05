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
$GLOBALS['TL_LANG']['tl_content']['caroufredsel_legend']			= 'carouFredSel settings';
$GLOBALS['TL_LANG']['tl_content']['caroufredsel_thumbnails_legend']	= 'carouFredSel-Vorschaubilder';


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['dk_cfsType']						= array('Operation mode', 'Please select the operation mode of the carouFredSel element.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStart']					= array('Wrapper start', 'Marks the beginning of a carouFredSel carousel that spans several content elements.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsStop']						= array('Wrapper stop', 'Marks the end of a carouFredSel carousel that spans several content elements.');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseThumbnails']			= array('Vorschaubilder einblenden', 'Bestimmt, ob Vorschaubilder eingeblendet werden durch die eine schnelle Navigation über die gesamte Galerie möglich wird.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsVisibleSelect']	= array('Anzahl der Vorschaubilder', 'Bestimmt die Art wie die Anzahl der sichtbaren Vorschaubilder ermittelt wird.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsVisible']		= array('gleichzeitig sichtbare Vorschaubilder', 'Anzahl der gleichzeitig sichtbaren Vorschaubilder.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailSize']			= array('Bildbreite und Bildhöhe', 'Hier können Sie die Abmessungen der Vorschaubilder und den Skalierungsmodus festlegen.');

$GLOBALS['TL_LANG']['tl_content']['dk_cfsCarouFredSel']				= array('carouFredSel carousel', 'Choose the carousel.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsSynchronise']				= array('carouFredSel-Karussells synchronisieren', 'Hier können Sie das Karussell auswählen, welches von diesem Karussell-Element gesteuert wird. Scrollt dieses Karussell scrollt das andere synchron.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsHtmlTpl']					= array('HTML template', 'Choose the HTML template.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsCssTpl']					= array('CSS template', 'Choose the CSS template.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsJsTpl']					= array('JavaScript template', 'Choose the JavaScript template.');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsVisibleSelect']['variable']	= array('variable', 'Die Anzahl der sichtbaren Vorschaubilder richtet sich nach der vorgegebenen Größe und des zur Verfügung stehenden Platzes.');
$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsVisibleSelect']['fixed']		= array('fixed', 'Die Anzahl der sichtbaren Vorschaubilder wird fest vorgegeben. Ihre Größe wird in Abhängigkeit des zur Verfügung stehenden Platzes angepaßt.');

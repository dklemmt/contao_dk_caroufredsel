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
$GLOBALS['TL_LANG']['tl_module']['caroufredsel_legend'] = 'carouFredSel settings';
$GLOBALS['TL_LANG']['tl_module']['caroufredsel_image_legend'] = 'image settings';
$GLOBALS['TL_LANG']['tl_module']['caroufredsel_thumbnails_legend'] = 'carouFredSel thumbnails';


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['dk_cfsMultiSRC'][0] = 'Source files';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsMultiSRC'][1] = 'Please select one or more files or folders from the files directory. If you select a folder, its files will be included automatically.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsSortBy'][0] = 'Order by';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsSortBy'][1] = 'Please choose the sort order.';

$GLOBALS['TL_LANG']['tl_module']['dk_cfsImageSize'][0] = 'Image width and height';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsImageSize'][1] = 'ATTENTION! Here you can set the image dimensions and the resize mode. This declaration relates to all selected images. The sizes for the carousel will be specified in the settings below!';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsFullsize'][0] = 'Full-size view/new window';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsFullsize'][1] = 'Open the full-size image in a lightbox or the link in a new browser window.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsNumberOfItems'][0] = 'Total number of images';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsNumberOfItems'][1] = 'Here you can limit the total number of images. Set to 0 to show all.';

$GLOBALS['TL_LANG']['tl_module']['dk_cfsUseThumbnails'][0] = 'show thumbnails';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsUseThumbnails'][1] = 'Bestimmt, ob Vorschaubilder eingeblendet werden durch die eine schnelle Navigation über die gesamte Galerie möglich wird. Sobald mehr Vorschaubilder vorhanden sind als Platz zur Verfügung steht wird automatisch eine Navigation eingeblendet.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisibleSelect'][0] = 'number of shown thumbnails';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisibleSelect'][1] = 'Bestimmt die Art wie die Anzahl der sichtbaren Vorschaubilder ermittelt wird.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisible'][0] = 'gleichzeitig sichtbare Vorschaubilder';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisible'][1] = 'Anzahl der gleichzeitig sichtbaren Vorschaubilder.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailSize'][0] = 'Vorschaubildbreite und -höhe';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailSize'][1] = 'Hier können Sie die Abmessungen der Vorschaubilder und den Skalierungsmodus festlegen.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsPosition'][0] = 'position of thumbnails';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsPosition'][1] = 'Hier können Sie die Position der Vorschaubilder festlegen.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsAlign'][0] = 'alignment of thumbnails';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsAlign'][1] = 'Bestimmt die Ausrichtung der Vorschaubilder innerhalb ihres Karussells.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsWidth'][0] = 'Vorschaubild-Karussell-Breite';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsWidth'][1] = 'Bestimmt die Breite des Vorschaubilder-Karussells in Abhängigkeit der gewählten Art. Lassen Sie das Feld leer wird bei Position oben/unten die Karussell-Breite verwendet.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsHeight'][0] = 'Vorschaubild-Karussell-Höhe';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsHeight'][1] = 'Bestimmt die Höhe des Vorschaubilder-Karussells in Abhängigkeit der gewählten Art. Lassen Sie das Feld leer wird bei Position links/rechts die Karussell-Höhe verwendet.';

$GLOBALS['TL_LANG']['tl_module']['dk_cfsCarouFredSel'][0] = 'carouFredSel configuration';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsCarouFredSel'][1] = 'Choose the carousel configuration for this carousel.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsSynchronise'][0] = 'synchronize carousels';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsSynchronise'][1] = 'Choose the slave carousel. Whenever the master carousels scrolls the slave will do equally.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsHtmlTpl'][0] = 'HTML template';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsHtmlTpl'][1] = 'Choose the HTML template.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsCssTpl'][0] = 'CSS template';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsCssTpl'][1] = 'Choose the CSS template.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsJsTpl'][0] = 'JavaScript template';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsJsTpl'][1] = 'Choose the JavaScript template.';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisibleSelect']['variable'][0] = 'variable';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisibleSelect']['variable'][1] = 'Die Anzahl der sichtbaren Vorschaubilder richtet sich nach der vorgegebenen Größe und des zur Verfügung stehenden Platzes.';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisibleSelect']['fixed'][0] = 'fixed';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisibleSelect']['fixed'][1] = 'Die Anzahl der sichtbaren Vorschaubilder wird fest vorgegeben. Ihre Größe wird in Abhängigkeit des zur Verfügung stehenden Platzes angepaßt.';

$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsPosition']['top'] = 'top';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsPosition']['bottom'] = 'bottom';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsPosition']['left'] = 'left';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsPosition']['right'] = 'right';

$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsAlign']['center'] = 'center';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsAlign']['left'] = 'left/top';
$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsAlign']['right'] = 'right/bottom';

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
 * @copyright Dirk Klemmt 2012 
 */

/**
 * CONTENT ELEMENTS
 *
 * Content elements are stored in a global array called "TL_CTE". You can add
 * your own content elements by adding them to the array.
 *
 * $GLOBALS['TL_CTE'] = array
 * (
 *    'group_1' => array
 *    (
 *       'cte_1' => 'ContentClass1',
 *       'cte_2' => 'ContentClass2'
 *    )
 * );
 *
 * The keys (like "cte_1") are the element names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "ContentClass1") are the names of the classes, which will be loaded when the
 * element is rendered. The class "ContentClass1" has to be stored in a file
 * named "ContentClass1.php" in your module folder.
 */
array_insert($GLOBALS['TL_CTE'], 3, array(
	'texts' => array(
		'dk_cfs' => 'carouFredSel\ContentCarouFredSel'
		)
	)
);

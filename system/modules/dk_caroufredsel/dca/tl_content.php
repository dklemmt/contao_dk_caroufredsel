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
 * Add config to tl_content
 */
if (Input::get('do') == 'caroufredsel')
{
	$GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_dk_caroufredsel';
}
//$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_dk_csf', 'changePalette');
switch ($GLOBALS['TL_CONFIG']['dk_cfsUsageMode'])
{
	default:
	case 'basic':
		$paletteCaroufredsel_start = '{type_legend},type;{caroufredsel_legend},dk_cfsCarouFredSel;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
		$paletteCaroufredsel_gallery = '{type_legend},type,headline;{source_legend},dk_cfsMultiSRC,dk_cfsSortBy;{caroufredsel_thumbnails_legend},dk_cfsUseThumbnails;{caroufredsel_legend},dk_cfsCarouFredSel;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
		$paletteCaroufredsel_background = '{type_legend},type,headline;{source_legend},dk_cfsMultiSRC,dk_cfsSortBy;{caroufredsel_thumbnails_legend},dk_cfsUseThumbnails;{caroufredsel_legend},dk_cfsCarouFredSel;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
		break;

	case 'advanced':
		$paletteCaroufredsel_start = '{type_legend},type;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsSynchronise,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
		$paletteCaroufredsel_gallery = '{type_legend},type,headline;{source_legend},dk_cfsMultiSRC,dk_cfsSortBy;{caroufredsel_image_legend},dk_cfsImageSize,dk_cfsFullsize,dk_cfsNumberOfItems;{caroufredsel_thumbnails_legend},dk_cfsUseThumbnails;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsSynchronise,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
		$paletteCaroufredsel_background = '{type_legend},type,headline;{source_legend},dk_cfsMultiSRC,dk_cfsSortBy;{caroufredsel_image_legend},dk_cfsNumberOfItems;{caroufredsel_thumbnails_legend},dk_cfsUseThumbnails;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsSynchronise,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
		break;
}


/**
 * Add palettes to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]			= 'dk_cfsUseThumbnails';

$GLOBALS['TL_DCA']['tl_content']['palettes']['caroufredsel_start']		= $paletteCaroufredsel_start;
$GLOBALS['TL_DCA']['tl_content']['palettes']['caroufredsel_gallery']	= $paletteCaroufredsel_gallery;
$GLOBALS['TL_DCA']['tl_content']['palettes']['caroufredsel_background']	= $paletteCaroufredsel_background;

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseThumbnails']	= 'dk_cfsThumbnailSize,dk_cfsThumbnailsPosition,dk_cfsThumbnailsAlign,dk_cfsThumbnailsWidth,dk_cfsThumbnailsHeight';


/**
 * Add fields to tl_content
 */
/*$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsUseArticleWrapper'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseArticleWrapper'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'sql'				=> "char(1) NOT NULL default ''"
);*/

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsMultiSRC'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsMultiSRC'],
	'exclude'			=> true,
	'inputType'			=> 'fileTree',
	'eval'				=> array('multiple' => true, 'fieldType' => 'checkbox', 'orderField' => 'orderSRC', 'files' => true, 'isGallery' => true, 'mandatory' => true),
	'sql'				=> "blob NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsSortBy'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsSortBy'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('custom', 'name_asc', 'name_desc', 'date_asc', 'date_desc', 'random'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsImageSize'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsImageSize'],
	'exclude'			=> true,
	'inputType'			=> 'imageSize',
	'options'			=> $GLOBALS['TL_CROP'],
	'reference'			=> &$GLOBALS['TL_LANG']['MSC'],
	'eval'				=> array('rgxp' => 'digit', 'nospace' => true, 'helpwizard' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsFullsize'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsFullsize'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class' => 'w50 m12'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsNumberOfItems'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsNumberOfItems'],
	'exclude'			=> true,
  	'inputType'			=> 'text',
  	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsUseThumbnails'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsUseThumbnails'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsThumbnailsVisibleSelect'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsVisibleSelect'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('variable'),// 'fixed'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsVisibleSelect'],
	'eval'				=> array('helpwizard' => true, 'submitOnChange' => true, 'tl_class' => 'clr w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsThumbnailSize'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailSize'],
	'exclude'			=> true,
	'inputType'			=> 'imageSize',
	'options'			=> $GLOBALS['TL_CROP'],
	'reference'			=> &$GLOBALS['TL_LANG']['MSC'],
	'eval'				=> array('rgxp' => 'digit', 'nospace' => true, 'helpwizard' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsThumbnailsVisible'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsVisible'],
	'exclude'			=> true,
  	'inputType'			=> 'text',
  	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '5'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsThumbnailsPosition'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsPosition'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'default'			=> 'bottom',
	'options'			=> array('top', 'bottom', 'left', 'right'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsPosition'],
	'eval'				=> array('tl_class' => 'clr w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsThumbnailsAlign'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsAlign'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'default'			=> 'center',
	'options'			=> array('center', 'left', 'right'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsAlign'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);
		
$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsThumbnailsWidth'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsWidth'],
	'exclude'			=> true,
	'inputType'			=> 'inputUnit',
	'options'			=> array('px', '%'),
	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'includeBlankOption' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsThumbnailsHeight'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsThumbnailsHeight'],
	'exclude'			=> true,
  	'inputType'			=> 'inputUnit',
	'options'			=> array('px', '%'),
	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'includeBlankOption' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsCarouFredSel'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsCarouFredSel'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'foreignKey'		=> 'tl_dk_caroufredsel.title',
	'eval'				=> array('includeBlankOption' => true, 'mandatory' => true, 'chosen' => true, 'submitOnChange' => true),
	'wizard'			=> array(array('tl_content_dk_csf', 'editCarouFredSel')),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsSynchronise'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsSynchronise'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getCarouFredSelCarousels'),
	'eval'				=> array('includeBlankOption' => true, 'maxlength' => 255, 'tl_class' => 'clr w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsHtmlTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsHtmlTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> function() { return Backend::getTemplateGroup('ce_caroufredsel'); },
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50 clr'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsCssTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsCssTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> function() { return Backend::getTemplateGroup('css_caroufredsel'); },
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsJsTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsJsTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> function() { return Backend::getTemplateGroup('js_caroufredsel'); },
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsGalleryTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsGalleryTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> function() { return Backend::getTemplateGroup('caroufredsel_gallery'); },
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);


/**
 * Class tl_content_dk_csf 
 *
 * @copyright  Dirk Klemmt 2012-2013
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class tl_content_dk_csf extends tl_content
{

	/**
	 * Change palettes on the fly
	 *
	 * @param \DataContainer
	 */
	public function changePalette(DataContainer $dc)
	{
		$obj = $this->Database
				->prepare("SELECT dk_cfsThumbnailsVisibleSelect
						   FROM   tl_content
						   WHERE  id = ? ")
				->limit(1)
				->execute($dc->id);

		if ($obj->numRows < 1)
		{
			return;
		}

		switch ($obj->dk_cfsThumbnailsVisibleSelect) {
			case 'variable':
				// only show field 'dk_cfsThumbnailSize' if field 'dk_cfsThumbnailsSelect' contains 'variable'
				$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseThumbnails'] = str_replace('dk_cfsThumbnailsVisibleSelect', 'dk_cfsThumbnailsVisibleSelect,dk_cfsThumbnailSize', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseThumbnails']);
				break;
	
			case 'fixed':
				// only show fields 'dk_cfsThumbnailsVisible' if field 'dk_cfsThumbnailsSelect' contains 'fixed'
				$GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseThumbnails'] = str_replace('dk_cfsThumbnailsVisibleSelect', 'dk_cfsThumbnailsVisibleSelect,dk_cfsThumbnailsVisible', $GLOBALS['TL_DCA']['tl_content']['subpalettes']['dk_cfsUseThumbnails']);
				break;
		}
	}


	/**
	 * Return the edit carouFredSel wizard
	 *
	 * @param \DataContainer
	 * @return string
	 */
	public function editCarouFredSel(DataContainer $dc)
	{
		return ($dc->value < 1) ? '' : ' <a href="contao/main.php?do=caroufredsel&amp;act=edit&amp;id=' . $dc->value . '&amp;rt=' . REQUEST_TOKEN . '" title="'.sprintf(specialchars($GLOBALS['TL_LANG']['tl_content']['editalias'][1]), $dc->value).'" style="padding-left:3px">' . $this->generateImage('alias.gif', $GLOBALS['TL_LANG']['tl_content']['editalias'][0], 'style="vertical-align:top"') . '</a>';
	}


	/**
	 * Return all carouFredSel carousels on same page as array
	 *
	 * @param \DataContainer
	 * @return array
	 */
	public function getCarouFredSelCarousels(DataContainer $dc)
	{
		$carouFredSelCarousels = array();

		$obj = $this->Database
				->prepare("SELECT id
						   FROM   tl_content
						   WHERE  pid = ? AND id != ? AND type IN ('caroufredsel_start', 'caroufredsel_background', 'caroufredsel_gallery') AND invisible != 1 ")
				->execute($dc->activeRecord->pid, $dc->activeRecord->id);

		if ($obj->numRows > 0)
		{
			while ($obj->next())
			{
				array_push($carouFredSelCarousels, $obj->id);
			}
		}

		return $carouFredSelCarousels;
	}
}

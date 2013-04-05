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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['caroufredsel']				= '{title_legend},name,headline,type;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsSynchronise,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['caroufredsel_gallery']		= '{title_legend},name,headline,type;{source_legend},dk_cfsMultiSRC,dk_cfsSortBy;{caroufredsel_thumbnails_legend},dk_cfsUseThumbnails;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsSynchronise,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['caroufredsel_background']	= '{title_legend},name,headline,type;{source_legend},dk_cfsMultiSRC,dk_cfsSortBy;{caroufredsel_thumbnails_legend},dk_cfsUseThumbnails;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsSynchronise,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['caroufredsel_ticker']		= '{title_legend},name,headline,type;{config_legend},news_archives,numberOfItems,news_featured,perPage,skipFirst;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsSynchronise,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{template_legend:hide},news_metaFields,news_template,imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
/*$GLOBALS['TL_DCA']['tl_module']['palettes']['caroufredsel_background']	= '{title_legend},name,headline,type;{source_legend},dk_cfsMultiSRC,dk_cfsSortBy;{image_legend},dk_cfsNumberOfItems;{caroufredsel_thumbnails_legend},dk_cfsUseThumbnails;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsSynchronise,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['caroufredsel_ticker']		= '{title_legend},name,headline,type;{config_legend},news_archives,numberOfItems,news_featured,perPage,skipFirst;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsSynchronise,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{template_legend:hide},news_metaFields,news_template,imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';*/
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['dk_cfsUseThumbnails']	= 'dk_cfsThumbnailSize';//dk_cfsThumbnailsVisibleSelect';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsMultiSRC'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['multiSRC'],
	'exclude'			=> true,
	'inputType'			=> 'cfsFileTree',
	'eval'				=> array('multiple' => true, 'fieldType' => 'checkbox', 'orderField' => 'orderSRC', 'files' => true, 'mandatory' => true),
	'sql'				=> "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsSortBy'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['sortBy'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('custom', 'name_asc', 'name_desc', 'date_asc', 'date_desc', 'random'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_module'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsImageSize'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsImageSize'],
	'exclude'			=> true,
	'inputType'			=> 'imageSize',
	'options'			=> $GLOBALS['TL_CROP'],
	'reference'			=> &$GLOBALS['TL_LANG']['MSC'],
	'eval'				=> array('rgxp' => 'digit', 'nospace' => true, 'helpwizard' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsNumberOfItems'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsNumberOfItems'],
	'exclude'			=> true,
  	'inputType'			=> 'text',
  	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsUseThumbnails'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsUseThumbnails'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsThumbnailsVisibleSelect'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisibleSelect'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('variable'),//, 'fixed'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisibleSelect'],
	'eval'				=> array('helpwizard' => true, 'submitOnChange' => true, 'tl_class' => 'w50 clr'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsThumbnailSize'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailSize'],
	'exclude'			=> true,
	'inputType'			=> 'imageSize',
	'options'			=> $GLOBALS['TL_CROP'],
	'reference'			=> &$GLOBALS['TL_LANG']['MSC'],
	'eval'				=> array('rgxp' => 'digit', 'nospace' => true, 'helpwizard' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsThumbnailsVisible'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisible'],
	'exclude'			=> true,
  	'inputType'			=> 'text',
  	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '5'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsCarouFredSel'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsCarouFredSel'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'foreignKey'		=> 'tl_dk_caroufredsel.title',
	'eval'				=> array('includeBlankOption' => true, 'mandatory' => true, 'chosen' => true, 'submitOnChange' => true),
	'wizard'			=> array(array('tl_module_dk_csf', 'editCarouFredSel')),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsSynchronise'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsSynchronise'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_module_dk_csf', 'getCarouFredSelCarousels'),
	'eval'				=> array('includeBlankOption' => true, 'maxlength' => 255, 'tl_class' => 'w50 clr'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsHtmlTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsHtmlTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_module_dk_csf', 'getHtmlTemplates'),
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50 clr'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsCssTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsCssTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_module_dk_csf', 'getCssTemplates'),
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsJsTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsJsTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_module_dk_csf', 'getJsTemplates'),
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsGalleryTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsGalleryTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_module_dk_csf', 'getCarouFredSelGalleryTemplates'),
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);


/**
 * Class tl_module_dk_csf 
 *
 * @copyright  Dirk Klemmt 2012-2013
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class tl_module_dk_csf extends tl_module
{

	/**
	 * Change palettes on the fly
	 *
	 * @param \DataContainer
	 */
	public function changePalette(DataContainer $dc)
	{
		$obj = $this->Database->prepare("SELECT dk_cfsThumbnailsVisibleSelect " .
										"FROM tl_module " .
										"WHERE id = ? ")
									->limit(1)
									->execute($dc->id);

		if ($obj->numRows < 1)
		{
			return;
		}

		switch ($obj->dk_cfsThumbnailsVisibleSelect) {
			case 'variable':
				// only show field 'dk_cfsThumbnailSize' if field 'dk_cfsThumbnailsSelect' contains 'variable'
				$GLOBALS['TL_DCA']['tl_module']['subpalettes']['dk_cfsUseThumbnails'] = str_replace('dk_cfsThumbnailsVisibleSelect', 'dk_cfsThumbnailsVisibleSelect,dk_cfsThumbnailSize', $GLOBALS['TL_DCA']['tl_module']['subpalettes']['dk_cfsUseThumbnails']);
				break;
	
			case 'fixed':
				// only show fields 'dk_cfsThumbnailsVisible' if field 'dk_cfsThumbnailsSelect' contains 'fixed'
				$GLOBALS['TL_DCA']['tl_module']['subpalettes']['dk_cfsUseThumbnails'] = str_replace('dk_cfsThumbnailsVisibleSelect', 'dk_cfsThumbnailsVisibleSelect,dk_cfsThumbnailsVisible', $GLOBALS['TL_DCA']['tl_module']['subpalettes']['dk_cfsUseThumbnails']);
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

/*		$obj = $this->Database->prepare("SELECT id " .
										"FROM tl_content " .
										"WHERE pid = ? AND id != ? AND type IN ('caroufredsel', 'caroufredsel_background', 'caroufredsel_gallery') AND dk_cfsType != 'dk_cfsStop' AND invisible != 1 ")
									->execute($dc->activeRecord->pid, $dc->activeRecord->id);

		if ($obj->numRows > 0)
		{
			while ($obj->next())
			{
				array_push($carouFredSelCarousels, $obj->id);
			}
		}*/

		return $carouFredSelCarousels;
	}


	/**
	 * Return all carouFredSel content element templates as array
	 *
	 * @return array
	 */
	public function getHtmlTemplates()
	{
		return $this->getTemplateGroup('mod_caroufredsel');
	}


	/**
	 * Return all carouFredSel CSS templates as array
	 *
	 * @return array
	 */
	public function getCssTemplates()
	{
		return $this->getTemplateGroup('css_caroufredsel');
	}


	/**
	 * Return all carouFredSel JavaScript templates as array
	 *
	 * @return array
	 */
	public function getJsTemplates()
	{
		return $this->getTemplateGroup('js_caroufredsel');
	}


	/**
	 * Return all carouFredSel gallery templates as array
	 *
	 * @return array
	 */
	public function getCarouFredSelGalleryTemplates()
	{
		return $this->getTemplateGroup('caroufredsel_gallery');
	}
}

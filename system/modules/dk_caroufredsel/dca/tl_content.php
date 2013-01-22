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
 * Config
 */
if (Input::get('do') == 'caroufredsel')
{
	$GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_dk_caroufredsel';
}


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]			= 'dk_cfsType';

$GLOBALS['TL_DCA']['tl_content']['palettes']['caroufredsel']			= '{type_legend},type,dk_cfsType';
$GLOBALS['TL_DCA']['tl_content']['palettes']['caroufredseldk_cfsStart']	= '{type_legend},type,dk_cfsType;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsType'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsType'],
  	'default'			=> 'dk_cfsStart',
  	'inputType'			=> 'radio',
 	'options'			=> array('dk_cfsStart', 'dk_cfsStop'),
  	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
  	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "varchar(32) NOT NULL default ''"
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

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsHtmlTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsHtmlTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getHtmlTemplates'),
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsCssTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsCssTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getCssTemplates'),
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_cfsJsTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_cfsJsTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_dk_csf', 'getJsTemplates'),
	'eval'				=> array('maxlength' => 255),
	'sql'				=> "varchar(255) NOT NULL default ''"
);


/**
 * Class tl_content_dk_csf 
 *
 * @copyright  Dirk Klemmt 2012 
 * @author     Dirk Klemmt 
 * @package    carouFredSel
 */
class tl_content_dk_csf extends tl_content
{

	/**
	 * Return the edit carouFredSel wizard
	 * @param \DataContainer
	 * @return string
	 */
	public function editCarouFredSel(DataContainer $dc)
	{
		return ($dc->value < 1) ? '' : ' <a href="contao/main.php?do=caroufredsel&amp;act=edit&amp;id=' . $dc->value . '&amp;rt=' . REQUEST_TOKEN . '" title="'.sprintf(specialchars($GLOBALS['TL_LANG']['tl_content']['editalias'][1]), $dc->value).'" style="padding-left:3px">' . $this->generateImage('alias.gif', $GLOBALS['TL_LANG']['tl_content']['editalias'][0], 'style="vertical-align:top"') . '</a>';
	}
	

	/**
	 * Return all carouFredSel content element templates as array
	 *
	 * @param \DataContainer
	 * @return array
	 */
	public function getHtmlTemplates(DataContainer $dc)
	{
		$intPid = $dc->activeRecord->pid;

		if (Input::get('act') == 'overrideAll')
		{
			$intPid = Input::get('id');
		}

		return $this->getTemplateGroup('ce_caroufredsel', $intPid);
	}


	/**
	 * Return all carouFredSel css templates as array
	 *
	 * @param \DataContainer
	 * @return array
	 */
	public function getCssTemplates(DataContainer $dc)
	{
		$intPid = $dc->activeRecord->pid;

		if (Input::get('act') == 'overrideAll')
		{
			$intPid = Input::get('id');
		}

		return $this->getTemplateGroup('css_caroufredsel', $intPid);
	}


	/**
	 * Return all carouFredSel JavaScript templates as array
	 *
	 * @param \DataContainer
	 * @return array
	 */
	public function getJsTemplates(DataContainer $dc)
	{
		$intPid = $dc->activeRecord->pid;

		if (Input::get('act') == 'overrideAll')
		{
			$intPid = Input::get('id');
		}

		return $this->getTemplateGroup('js_caroufredsel', $intPid);
	}
}

<?php 

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
 * Namespace
 */
namespace Dirch\carouFredSel;

if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Class ContentCarouFredSel 
 *
 * @copyright  Dirk Klemmt 2012 
 * @author     Dirk Klemmt 
 * @package    carouFredSel
 */
class ContentCarouFredSel extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_caroufredsel';


	/**
	 * Generate the module
	 */
	protected function compile()
	{
		// carouFredSel start element
		if ($this->dk_cfsType == 'dk_cfsStart')
		{
			if (TL_MODE == 'FE')
			{
				/*
				 * search for first visible carouFredSel stop element with a
				 * position after visible start element (sorting>$this->sorting)
				 */
/*				$objStopElement = $this->Database->prepare("SELECT sorting " .
														   "FROM tl_content " .
														   "WHERE pid = ? AND type = ? AND dk_cfsType = ? AND sorting > ? AND invisible != 1 " .
														   "ORDER by sorting ASC")
													->limit(1)
													->execute($this->pid, 'dk_cfs', 'dk_cfsStop', $this->sorting);

				if ($objStopElement->numRows < 1)
				{
					$this->log('carouFredSel stop element is missing!', 'ContentCarouFredSel compile()', TL_ERROR);
//					return;
// todo: maybe error handling but stop element shouldn't be missing!
				}
*/
//echo $objStopElement->sorting . '<br />';

				/*
				 * get every Content Elements between those carouFredSel start and
				 * stop elements
				 */
/*				$objContentElements = $this->Database->prepare("SELECT id, type " .
															   "FROM tl_content " .
															   "WHERE pid = ? AND invisible != 1 AND sorting > ? AND sorting < ? " .
															   "ORDER by sorting ASC")
													->execute($this->pid, $this->sorting, $objStopElement->sorting);
*/

				$objStartElement = $this->Database->prepare("SELECT id, dk_cfsHTMLTpl, dk_cfsNavigation, dk_cfsPagination " .
															"FROM tl_content " .
															"WHERE pid = ? AND type = ? AND dk_cfsType = ? AND sorting < ? AND invisible != 1 " .
															"ORDER by sorting DESC")
													->limit(1)
													->execute($this->pid, 'dk_cfs', 'dk_cfsStart', $this->sorting);

				// create FE template for carouFredSel start element
				$this->Template = new \FrontendTemplate($this->dk_cfsHTMLTpl);
				$this->Template->id = $this->id;
				$this->Template->dk_cfsType = $this->dk_cfsType;
				$this->Template->navigation = $this->dk_cfsNavigation;
				$this->Template->pagination = $this->dk_cfsPagination;

				// create FE template for javascript caller
				$objTemplateJs = new \FrontendTemplate($this->dk_cfsJsTpl);

				// (unique) Element id will be used for unique HTML id element
				$objTemplateJs->id = $this->id;

				// only none default values will be send to the template
				$dk_cfsSizeArray = unserialize($this->dk_cfsSize);
				if ($dk_cfsSizeArray[0])
					$objTemplateJs->width = $dk_cfsSizeArray[0];
				if ($dk_cfsSizeArray[1])
					$objTemplateJs->height = $dk_cfsSizeArray[1];

//				$this->padding = unserialize($this->dk_cfsPadding);
//echo $this->dk_cfsPadding . '<br>';

				$objTemplateJs->visibleItems = ($this->dk_cfsVisibleItems == '0' ? '' : $this->dk_cfsVisibleItems);
				if (!$this->dk_cfsStartItemRnd)
					$objTemplateJs->startItemNo = ($this->dk_cfsStartItemNo == '0' ? '' : $this->dk_cfsStartItemNo);
				else
					$objTemplateJs->startItemRnd = $this->dk_cfsStartItemRnd;

				$objTemplateJs->direction = ($this->dk_cfsDirection == 'left' ? '' : $this->dk_cfsDirection);
				$objTemplateJs->carouselType = ($this->dk_cfsCarouselType == 'circular' ? '' : $this->dk_cfsCarouselType);
				$objTemplateJs->scrollItems = ($this->dk_cfsScrollItems == '0' ? '' : $this->dk_cfsScrollItems);

				$objTemplateJs->scrollEffects = $this->dk_cfsScrollEffects;
				if ($this->dk_cfsScrollEffects)
				{
					$objTemplateJs->scrollFx = ($this->dk_cfsFx == 'scroll' ? '' : $this->dk_cfsFx);
					$objTemplateJs->scrollEasing = ($this->dk_cfsEasing == 'swing' ? '' : $this->dk_cfsEasing);
					$objTemplateJs->scrollDuration = ($this->dk_cfsDuration == '500' ? '' : $this->dk_cfsDuration);
				}

				$objTemplateJs->autoPlay = $this->dk_cfsAutoPlay;
				if ($this->dk_cfsAutoPlay)
				{
					$objTemplateJs->pauseDuration = ($this->dk_cfsPauseDuration == '2500' ? '' : $this->dk_cfsPauseDuration);
					$objTemplateJs->delay = ($this->dk_cfsDelay == '0' ? '' : $this->dk_cfsDelay);

					if ($this->dk_cfsPauseOnHover != 'none')
						$objTemplateJs->pauseOnHover = $this->dk_cfsPauseOnHover;
				}

				$objTemplateJs->navigation = $this->dk_cfsNavigation;
				if ($this->dk_cfsNavigation)
				{
					$objTemplateJs->prevKey = ($this->dk_cfsPrevKey == 'none' ? '' : $this->dk_cfsPrevKey);
					$objTemplateJs->nextKey = ($this->dk_cfsNextKey == 'none' ? '' : $this->dk_cfsNextKey);

					$objTemplateJs->pagination = $this->dk_cfsPagination;
					if ($this->dk_cfsPagination)
						$objTemplateJs->paginationKeys = $this->dk_cfsPaginationKeys;
				}

				// parse and add
				$GLOBALS['TL_HEAD'][] = $objTemplateJs->parse();					
				$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_caroufredsel/assets/jquery.carouFredSel.js';
			}
			else
			{
				// create BE template for carouFredSel start element
				$this->strTemplate = 'be_wildcard';
				$this->Template = new \BackendTemplate($this->strTemplate);
	    		$this->Template->wildcard = '### CAROUFREDSEL WRAPPER START ###';
			}
		}

		// carouFredSel stop element
		elseif ($this->dk_cfsType == 'dk_cfsStop')
		{
			if (TL_MODE == 'FE')
			{
				// create FE template for carouFredSel stop element using same template as start element

				// search for first visible carouFredSel start element with a position before end element
				$objStartElement = $this->Database->prepare("SELECT id, dk_cfsHTMLTpl, dk_cfsNavigation, dk_cfsPagination " .
															"FROM tl_content " .
															"WHERE pid = ? AND type = ? AND dk_cfsType = ? AND sorting < ? AND invisible != 1 " .
															"ORDER by sorting DESC")
													->limit(1)
													->execute($this->pid, 'dk_cfs', 'dk_cfsStart', $this->sorting);
				if ($objStartElement->numRows < 1)
				{
					$this->log('carouFredSel start element is missing!', 'ContentCarouFredSel compile()', TL_ERROR);
					return;
// todo: maybe error handling but start element shouldn't be missing!
				}

				$this->Template = new \FrontendTemplate($objStartElement->dk_cfsHTMLTpl);
				$this->Template->id = $objStartElement->id;
				$this->Template->dk_cfsType = $this->dk_cfsType;
				$this->Template->navigation = $objStartElement->dk_cfsNavigation;
				$this->Template->pagination = $objStartElement->dk_cfsPagination;
			}
			else
			{
				// create BE template for carouFredSel stop element
				$this->strTemplate = 'be_wildcard';
				$this->Template = new \BackendTemplate($this->strTemplate);
	    		$this->Template->wildcard = '### CAROUFREDSEL WRAPPER STOP ###';
			}
		}
	}
}

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
				 * get every Content Element between carouFredSel start and
				 * stop elements
				 */
/*				$objContentElements = $this->Database->prepare("SELECT id, type " .
															   "FROM tl_content " .
															   "WHERE pid = ? AND invisible != 1 AND sorting > ? AND sorting < ? " .
															   "ORDER by sorting ASC")
													->execute($this->pid, $this->sorting, $objStopElement->sorting);
*/

/*				$objStartElement = $this->Database->prepare("SELECT id, dk_cfsHTMLTpl, dk_cfsNavigation, dk_cfsPagination " .
															"FROM tl_content " .
															"WHERE pid = ? AND type = ? AND dk_cfsType = ? AND sorting < ? AND invisible != 1 " .
															"ORDER by sorting DESC")
													->limit(1)
													->execute($this->pid, 'dk_cfs', 'dk_cfsStart', $this->sorting);*/

				// --- create FE template for carouFredSel start element
				$this->Template = new \FrontendTemplate($this->dk_cfsHTMLTpl);
				$this->Template->id = $this->id;
				$this->Template->dk_cfsType = $this->dk_cfsType;
				$this->Template->navigation = $this->dk_cfsNavigation;
				$this->Template->pagination = $this->dk_cfsPagination;

				// --- create FE template for javascript caller
				$objTemplateJs = new \FrontendTemplate($this->dk_cfsJsTpl);

				// (unique) Element id will be used for unique HTML id element
				$objTemplateJs->id = $this->id;

				// only none default values will be send to template

				// --- play behaviour
				if ($this->dk_cfsUsePlay)
				{	
					// carouFredSel option 'direction': default value is 'left'
					$objTemplateJs->direction = ($this->dk_cfsDirection == 'left' ? '' : 'direction: "' . $this->dk_cfsDirection . '"');
		
					// carouFredSel options 'circular' and 'infinite': default (contao extension) value is 'circular'
					if ($this->dk_cfsCarouselType == 'one time') {		
						$objTemplateJs->carouselType = 'circular: false, infinite: false';
					} else if ($this->carouselType == 'infinite') {
						$objTemplateJs->carouselType =  'circular: false';
					}

					// carouFredSel option 'scroll.items': default value is 'null'
					$objTemplateJs->scrollItems = ($this->dk_cfsScrollItems == '0' ? '' : 'items: ' . $this->dk_cfsScrollItems);
		
					$objTemplateJs->autoPlay = ($this->dk_cfsAutoPlay ? '' : 'auto: false' . $this->dk_cfsAutoPlay);
					if ($this->dk_cfsAutoPlay)
					{
						// carouFredSel option 'auto.timeoutDuration': default value is '2500'
						$objTemplateJs->autoTimeoutDuration = ($this->dk_cfsAutoTimeoutDuration == '2500' ? '' : 'timeoutDuration: ' . $this->dk_cfsAutoTimeoutDuration);
		
						// carouFredSel option 'auto.delay': default value is '0'
						$objTemplateJs->autoDelay = ($this->dk_cfsAutoDelay == '0' ? '' : 'delay: ' . $this->dk_cfsAutoDelay);
		
						// carouFredSel option 'scroll.pauseOnHover': default value is 'false'
						$objTemplateJs->scrollPauseOnHover = ($this->dk_cfsScrollPauseOnHover == 'none' ? '' : 'pauseOnHover: ' . ($this->pauseOnHover == 'restart' ? 'true' : '"' . $this->dk_cfsScrollPauseOnHover . '"'));
					}
				}

				// --- transistions
				if ($this->dk_cfsUseTransitions)
				{
					// carouFredSel option 'scroll.fx': default value is 'scroll'
					$objTemplateJs->scrollFx = ($this->dk_cfsScrollFx == 'scroll' ? '' : 'fx: "' . $this->dk_cfsScrollFx . '"');

					// carouFredSel option 'scroll.easing': default value is 'swing'
					$objTemplateJs->scrollEasing = ($this->dk_cfsScrollEasing == 'swing' ? '' : 'easing: "' . $this->dk_cfsScrollEasing . '"');

					// carouFredSel option 'scroll.duration': default value is '500'
					$objTemplateJs->scrollDuration = ($this->dk_cfsScrollDuration == '500' ? '' : 'duration: ' . $this->dk_cfsScrollDuration);
				}

				// --- general size
				if ($this->dk_cfsUseGeneralSize)
				{
					// carouFredSel option 'width': default value is 'null'
					switch ($this->dk_cfsWidthSelect)
					{
						case 'variable':
							$objTemplateJs->width = 'width: "variable"';
							break;

						case 'auto':
							$objTemplateJs->width = 'width: "auto"';
							break;

						case 'fixed':
							$dk_cfsWidth = unserialize($this->dk_cfsWidth);
							$objTemplateJs->width = 'width: ' . $dk_cfsWidth['value'];
							break;

						case 'fluid':
							$dk_cfsWidth = unserialize($this->dk_cfsWidth);
							$objTemplateJs->width = sprintf('width: "%s%s"', $dk_cfsWidth['value'], $dk_cfsWidth['unit']);
							break;
					}

					// carouFredSel option 'height': default value is 'null'
					switch ($this->dk_cfsHeightSelect)
					{
						case 'variable':
							$objTemplateJs->height = 'height: "variable"';
							break;

						case 'auto':
							$objTemplateJs->height = 'height: "auto"';
							break;

						case 'fixed':
							$dk_cfsHeight = unserialize($this->dk_cfsHeight);
							$objTemplateJs->height = 'height: ' . $dk_cfsHeight['value'];
							break;

						case 'fluid':
							$dk_cfsHeight = unserialize($this->dk_cfsHeight);
							$objTemplateJs->height = sprintf('height: "%s%s"', $dk_cfsHeight['value'], $dk_cfsHeight['unit']);
							break;
					}

					// carouFredSel option 'padding': default value is 'null'
					$dk_cfsPadding = unserialize($this->dk_cfsPadding);
					if ($dk_cfsPadding['unit'])
					{
						$paddingTop = ($dk_cfsPadding['top'] ? $dk_cfsPadding['top'] : 0);
						$paddingRight = ($dk_cfsPadding['right'] ? $dk_cfsPadding['right'] : 0);
						$paddingBottom = ($dk_cfsPadding['bottom'] ? $dk_cfsPadding['bottom'] : 0);
						$paddingLeft = ($dk_cfsPadding['left'] ? $dk_cfsPadding['left'] : 0);

						if (($paddingTop == $paddingRight) && ($paddingTop == $paddingBottom) && ($paddingTop == $paddingLeft))
						{
							if ($paddingTop != 0)
							{
								$objTemplateJs->padding = 'padding: ' . $paddingTop;
							}
						} else if (($paddingTop == $paddingBottom) && ($paddingRight == $paddingLeft))
						{
							$objTemplateJs->padding = sprintf('padding: [%s, %s]', $dk_cfsPadding['top'], $dk_cfsPadding['right']);
						} else if ($paddingRight == $paddingLeft)
						{
							$objTemplateJs->padding = sprintf('padding: [%s, %s, %s]', $dk_cfsPadding['top'], $dk_cfsPadding['right'], $dk_cfsPadding['bottom']);
						} else
						{
							$objTemplateJs->padding = sprintf('padding: [%s, %s, %s, %s]', $dk_cfsPadding['top'], $dk_cfsPadding['right'], $dk_cfsPadding['bottom'], $dk_cfsPadding['left']);
						}
					}

					// carouFredSel option 'align': default value is 'center'
					if ($this->dk_cfsAlign && ($this->dk_cfsWidthSelect == 'fixed' || $this->dk_cfsHeightSelect == 'fixed'))
					{
						$objTemplateJs->align = ($this->dk_cfsAlign == 'center' ? '' : 'align: "' . $this->dk_cfsAlign . '"');
					}
				}

				// --- items size
				if ($this->dk_cfsUseItemsSize)
				{
					// carouFredSel option 'items.width': default value is 'null'
					switch ($this->dk_cfsItemsWidthSelect)
					{
						case 'variable':
							$objTemplateJs->itemsWidth = 'width: "variable"';
							break;

						case 'fixed':
							$dk_cfsItemsWidth = unserialize($this->dk_cfsItemsWidth);
							$objTemplateJs->itemsWidth = 'width: ' . $dk_cfsItemsWidth['value'];
							break;

						case 'fluid':
							$dk_cfsItemsWidth = unserialize($this->dk_cfsItemsWidth);
							$objTemplateJs->itemsWidth = sprintf('width: "%s%s"', $dk_cfsItemsWidth['value'], $dk_cfsItemsWidth['unit']);
							break;
					}

					// carouFredSel option 'items.height': default value is 'null'
					switch ($this->dk_cfsItemsHeightSelect)
					{
						case 'variable':
							$objTemplateJs->itemsHeight = 'height: "variable"';
							break;

						case 'fixed':
							$dk_cfsItemsHeight = unserialize($this->dk_cfsItemsHeight);
							$objTemplateJs->itemsHeight = 'height: ' . $dk_cfsItemsHeight['value'];
							break;

						case 'fluid':
							$dk_cfsItemsHeight = unserialize($this->dk_cfsItemsHeight);
							$objTemplateJs->itemsHeight = sprintf('height: "%s%s"', $dk_cfsItemsHeight['value'], $dk_cfsItemsHeight['unit']);
							break;
					}
				}
				
				// --- items general
				if ($this->dk_cfsUseItemsGeneral)
				{
					// carouFredSel option 'responsive': default value is 'false'
					$objTemplateJs->responsive = ($this->dk_cfsResponsive ? 'responsive: true' : '');

					// carouFredSel option 'cookie': default value is 'false'
					$objTemplateJs->cookie = ($this->dk_cfsCookie ? 'cookie: true' : '');

					// carouFredSel option 'items.visible': default value is 'null'
					switch ($this->dk_cfsItemsVisibleSelect)
					{
						case 'variable':
							$objTemplateJs->itemsVisible = 'visible: "variable"';
							break;

						case 'fixed':
							$objTemplateJs->itemsVisible = ($this->dk_cfsItemsVisible == '0' ? '' : 'visible: ' . $this->dk_cfsItemsVisible);
							break;

						case 'min/max':
							if (($this->dk_cfsItemsVisibleMin != '0') && ($this->dk_cfsItemsVisibleMax != '0'))
							{
								$objTemplateJs->itemsVisible = 'visible: { min: ' . $this->dk_cfsItemsVisibleMin . ', max: ' . $this->dk_cfsItemsVisibleMax . ' }';
							} else if ($this->dk_cfsItemsVisibleMax != '0')
							{
								$objTemplateJs->itemsVisible = 'visible: { max: ' . $this->dk_cfsItemsVisibleMax . ' }';
							} else if ($this->dk_cfsItemsVisibleMin != '0')
							{
								$objTemplateJs->itemsVisible = 'visible: { min: ' . $this->dk_cfsItemsVisibleMin . ' }';
							}
							break;
					}

					// carouFredSel option 'items.start': default value is '0'
					if ($this->dk_cfsItemsStartRnd)
					{
						$objTemplateJs->itemsStart = 'start: "random"';
					}
					else
					{
						$objTemplateJs->itemsStart = ($this->dk_cfsItemsStart == '0' ? '' : 'start: ' . $this->dk_cfsItemsStart);
					}
				}

				// --- navigation
				if ($this->dk_cfsUseNavigation)
				{
					// carouFredSel option 'prev.key': default value is 'null'
					$objTemplateJs->prevKey = ($this->dk_cfsPrevKey == 'none' ? '' : 'key: "' . $this->dk_cfsPrevKey . '"');

					// carouFredSel option 'prev.next': default value is 'null'
					$objTemplateJs->nextKey = ($this->dk_cfsNextKey == 'none' ? '' : 'key: "' . $this->dk_cfsNextKey . '"');

					// carouFredSel option 'swipe.onTouch'
					$objTemplateJs->swipeOnTouch = ($this->dk_cfsSwipeOnTouch ? 'onTouch: true' : '');

					// carouFredSel option 'swipe.onMouse'
					$objTemplateJs->swipeOnMouse = ($this->dk_cfsSwipeOnMouse ? 'onMouse: true' : '');

					// carouFredSel option 'mousewheel'
					$objTemplateJs->mousewheel = ($this->dk_cfsMousewheel ? 'mousewheel: true' : '');

					if ($this->dk_cfsNavigation)
					{
						$objTemplateJs->navigation = $this->dk_cfsNavigation;

						// carouFredSel option 'auto.button': default value is 'null'. Only if auto play is enabled.
						$objTemplateJs->autoButton = ($this->dk_cfsAutoPlay ? $this->dk_cfsAutoButton : '');
	
						if ($this->dk_cfsPagination)
						{
							$objTemplateJs->pagination = $this->dk_cfsPagination;

							// carouFredSel option 'keys'			
							$objTemplateJs->paginationKeys = ($this->dk_cfsPaginationKeys ? 'keys: true' : '');
						}
					}
				}

				// parse and add
				$GLOBALS['TL_HEAD'][] = $objTemplateJs->parse();					
				$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_caroufredsel/assets/js/jquery.carouFredSel-6.1.0-packed.js';
			}
			else
			{
				// --- create BE template for carouFredSel start element
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
				// --- create FE template for carouFredSel stop element using same template as start element

				// search for first visible carouFredSel start element with a position before end element
				$objStartElement = $this->Database->prepare("SELECT id, dk_cfsHTMLTpl, dk_cfsNavigation, dk_cfsAutoPlay, dk_cfsAutoButton, dk_cfsPagination " .
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
				if ($objStartElement->dk_cfsAutoPlay)
				{
					$this->Template->autoButton = $objStartElement->dk_cfsAutoButton;
				}
				$this->Template->pagination = $objStartElement->dk_cfsPagination;
			}
			else
			{
				// --- create BE template for carouFredSel stop element
				$this->strTemplate = 'be_wildcard';
				$this->Template = new \BackendTemplate($this->strTemplate);
	    		$this->Template->wildcard = '### CAROUFREDSEL WRAPPER STOP ###';
			}
		}
	}
}

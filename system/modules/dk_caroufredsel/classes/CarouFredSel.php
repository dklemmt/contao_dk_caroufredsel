<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2015 Leo Feyer
 * 
 * @package   carouFredSel
 * @author    Dirk Klemmt
 * @license   MIT/GPL
 * @copyright Dirk Klemmt 2012-2015
 */


/**
 * Namespace
 */
namespace Dirch\carouFredSel;


/**
 * Class CarouFredSel
 *
 * @package   carouFredSel
 * @author    Dirk Klemmt
 * @license   MIT/GPL
 * @copyright Dirk Klemmt 2012-2015
 */
class CarouFredSel extends \Frontend 
{

	public function createTemplateData($carouFredSelId, $strCarouFredSelType, \Template $objTemplateHtml, \Template $objTemplateCss, \Template $objTemplateJs)
	{
		$objCarouFredSel = CarouFredSelModel::findByPk($carouFredSelId);
		if ($objCarouFredSel === null)
		{
			return;
		}

		// set element type
		$objTemplateHtml->type =
		$objTemplateJs->type =
		$objTemplateCss->type = $strCarouFredSelType;

		if ($objTemplateJs->synchronise)
		{
			$objTemplateJs->synchronise = 'synchronise : ["#caroufredsel_' . $objTemplateJs->synchronise . '", false]';
//			$objTemplateJs->synchronise = 'synchronise : "#caroufredsel_' . $objTemplateJs->synchronise . '"';
		}

		// --- fill FE template for carouFredSel element and javascript caller
		// only none default values will be send to template

		// --- play behaviour
		if ($objCarouFredSel->usePlay)
		{	
			// carouFredSel option 'direction': default value is 'left'
			if ($objCarouFredSel->direction != 'left')
			{
				$objTemplateJs->direction = 'direction: "' . $objCarouFredSel->direction . '"';
				$objTemplateCss->direction = $objCarouFredSel->direction;
			}

			// carouFredSel options 'circular' and 'infinite': default (contao extension) value is 'circular'
			if ($objCarouFredSel->carouselType == 'once')
			{		
				$objTemplateJs->carouselType = 'circular: false, infinite: false';
			}
			elseif ($objCarouFredSel->carouselType == 'infinite')
			{
				$objTemplateJs->carouselType =  'circular: false';
			}

			// carouFredSel option 'scroll.items': default value is 'null'
			if ($objCarouFredSel->scrollItems != '0')
			{
				$objTemplateJs->scrollItems = 'items: ' . $objCarouFredSel->scrollItems;
			}

			// carouFredSel option 'scroll.queue': default value is 'false'
			if ($objCarouFredSel->scrollQueue != 'none')
			{
				$objTemplateJs->scrollQueue = 'queue: ' . ($objCarouFredSel->scrollQueue == 'all' ? 'true' : '"' . $objCarouFredSel->scrollQueue . '"');
			}

			if (!$objCarouFredSel->autoPlay)
			{
				$objTemplateJs->autoPlay = 'auto: false' . $objCarouFredSel->autoPlay;
			}

			if ($objCarouFredSel->autoPlay)
			{
				// carouFredSel option 'auto.timeoutDuration': default value is '2500'
				if ($objCarouFredSel->autoTimeoutDuration != '2500')
				{
					$objTemplateJs->autoTimeoutDuration = 'timeoutDuration: ' . $objCarouFredSel->autoTimeoutDuration;
				}

				// carouFredSel option 'auto.delay': default value is '0'
				if ($objCarouFredSel->autoDelay != '0')
				{
					$objTemplateJs->autoDelay = 'delay: ' . $objCarouFredSel->autoDelay;
				}

				// carouFredSel option 'scroll.pauseOnHover': default value is 'false'
				if ($objCarouFredSel->scrollPauseOnHover != 'none')
				{
					$objTemplateJs->scrollPauseOnHover =  'pauseOnHover: ' . ($objCarouFredSel->scrollPauseOnHover == 'restart' ? 'true' : '"' . $objCarouFredSel->scrollPauseOnHover . '"');
				}

				// carouFredSel option 'auto.progress': default value is 'null'
				if ($objCarouFredSel->autoProgress != 'none')
				{
					$objTemplateHtml->autoProgress =
					$objTemplateJs->autoProgress =
					$objTemplateCss->autoProgress = $objCarouFredSel->autoProgress;

					// carouFredSel option 'auto.progress.interval': default value is '50'
					if ($objCarouFredSel->autoProgressInterval != '50')
					{
						$objTemplateJs->autoProgressInterval = ($objCarouFredSel->autoProgressInterval == '50' ? '' : 'interval: ' . $objCarouFredSel->autoProgressInterval);
					}
				}
			}
		}

		// --- transistions
		if ($objCarouFredSel->useTransitions)
		{
			// carouFredSel option 'scroll.fx': default value is 'scroll'
			if ($objCarouFredSel->scrollFx != 'scroll')
			{
				$objTemplateJs->scrollFx = 'fx: "' . $objCarouFredSel->scrollFx . '"';
			}

			// carouFredSel option 'scroll.easing': default value is 'swing'
			if ($objCarouFredSel->scrollEasing != 'swing')
			{
				$objTemplateJs->scrollEasing = 'easing: "' . $objCarouFredSel->scrollEasing . '"';
			}

			// carouFredSel option 'scroll.duration': default value is '500'
			if ($objCarouFredSel->scrollDuration != '500')
			{
				$objTemplateJs->scrollDuration = 'duration: ' . $objCarouFredSel->scrollDuration;
			}
		}

		// --- general size
		if ($objCarouFredSel->useGeneralSize)
		{
			$objTemplateJs->widthSelect = $objCarouFredSel->widthSelect;
			$objTemplateJs->heightSelect = $objCarouFredSel->heightSelect;

			// carouFredSel option 'width': default value is 'null'
			switch ($objCarouFredSel->widthSelect)
			{
				case 'variable':
					$objTemplateJs->width = 'width: "variable"';
					break;

				case 'auto':
					$objTemplateJs->width = 'width: "auto"';
					break;

				case 'fixed':
					$width = unserialize($objCarouFredSel->width);
					if (isset($width['value']) && $width['value'] != '')
					{
						$objTemplateJs->width = 'width: ' . $width['value'];
						$objTemplateCss->width = $objTemplateJs->width . $width['unit'] . ';';
						$objTemplateCss->widthValue = $width['value'];
						$objTemplateCss->widthUnit = $width['unit'];
					}
					break;

				case 'fluid':
					$width = unserialize($objCarouFredSel->width);
					if (isset($width['value']) && $width['value'] != '')
					{
						$objTemplateJs->width = sprintf('width: "%s%s"', $width['value'], $width['unit']);
						$objTemplateCss->width = sprintf('width: %s%s;', $width['value'], $width['unit']);
						$objTemplateCss->widthValue = $width['value'];
						$objTemplateCss->widthUnit = $width['unit'];
					}
					break;
			}

			// carouFredSel option 'height': default value is 'null'
			switch ($objCarouFredSel->heightSelect)
			{
				case 'variable':
					$objTemplateJs->height = 'height: "variable"';
					break;

				case 'auto':
					$objTemplateJs->height = 'height: "auto"';
					break;

				case 'fixed':
					$height = unserialize($objCarouFredSel->height);
					if (isset($height['value']) && $height['value'] != '')
					{
						$objTemplateJs->height = 'height: ' . $height['value'];
						$objTemplateCss->height = $objTemplateJs->height . $height['unit']. ';';
					}
					break;

				case 'fluid':
					$height = unserialize($objCarouFredSel->height);
					if (isset($height['value']) && $height['value'] != '')
					{
						$objTemplateJs->height = sprintf('height: "%s%s"', $height['value'], $height['unit']);
						$objTemplateCss->height = sprintf('height: %s%s;', $height['value'], $height['unit']);
					}
					break;
			}

			// carouFredSel option 'padding': default value is 'null'
			$padding = unserialize($objCarouFredSel->padding);
			if ($padding['unit'])
			{
				$paddingTop = ($padding['top'] ? $padding['top'] : '0');
				$paddingRight = ($padding['right'] ? $padding['right'] : '0');
				$paddingBottom = ($padding['bottom'] ? $padding['bottom'] : '0');
				$paddingLeft = ($padding['left'] ? $padding['left'] : '0');

				if (($paddingTop == $paddingRight) && ($paddingTop == $paddingBottom) && ($paddingTop == $paddingLeft))
				{
					if ($paddingTop != '0')
					{
						$objTemplateJs->padding = 'padding: ' . $paddingTop;
					}
				}
				elseif (($paddingTop == $paddingBottom) && ($paddingRight == $paddingLeft))
				{
					$objTemplateJs->padding = sprintf('padding: [%s, %s]', $paddingTop, $paddingRight);
				}
				elseif ($paddingRight == $paddingLeft)
				{
					$objTemplateJs->padding = sprintf('padding: [%s, %s, %s]', $paddingTop, $paddingRight, $paddingBottom);
				}
				else
				{
					$objTemplateJs->padding = sprintf('padding: [%s, %s, %s, %s]', $paddingTop, $paddingRight, $paddingBottom, $paddingLeft);
				}
			}

			// carouFredSel option 'align': default value is 'center'
			if (($objCarouFredSel->align != 'center') && ($objCarouFredSel->widthSelect == 'fixed' || $objCarouFredSel->heightSelect == 'fixed'))
			{
				$objTemplateJs->align = 'align: ' . ($objCarouFredSel->align == 'none' ? 'false' : '"' . $objCarouFredSel->align . '"');
			}
		}

		// --- items size
		if ($objCarouFredSel->useItemsSize)
		{
			// carouFredSel option 'items.width': default value is 'null'
			switch ($objCarouFredSel->itemsWidthSelect)
			{
				case 'variable':
					$objTemplateJs->itemsWidth = 'width: "variable"';
					break;

				case 'fixed':
					$itemsWidth = unserialize($objCarouFredSel->itemsWidth);
					if (isset($itemsWidth['value']) && $itemsWidth['value'] != '')
					{
						$objTemplateJs->itemsWidth = 'width: ' . $itemsWidth['value'];
					}
					break;

				case 'fluid':
					$itemsWidth = unserialize($objCarouFredSel->itemsWidth);
					if (isset($itemsWidth['value']) && $itemsWidth['value'] != '')
					{
						$objTemplateJs->itemsWidth = sprintf('width: "%s%s"', $itemsWidth['value'], $itemsWidth['unit']);
					}
					break;
			}

			// carouFredSel option 'items.height': default value is 'null'
			switch ($objCarouFredSel->itemsHeightSelect)
			{
				case 'variable':
					$objTemplateJs->itemsHeight = 'height: "variable"';
					break;

				case 'fixed':
					$itemsHeight = unserialize($objCarouFredSel->itemsHeight);
					if (isset($itemsHeight['value']) && $itemsHeight['value'] != '')
					{
						$objTemplateJs->itemsHeight = 'height: ' . $itemsHeight['value'];
					}
					break;

				case 'fluid':
					$itemsHeight = unserialize($objCarouFredSel->itemsHeight);
					if (isset($itemsHeight['value']) && $itemsHeight['value'] != '')
					{
						$objTemplateJs->itemsHeight = sprintf('height: "%s%s"', $itemsHeight['value'], $itemsHeight['unit']);
					}
					break;
			}
		}
		
		// --- items general
		if ($objCarouFredSel->useItemsGeneral)
		{
			// carouFredSel option 'responsive': default value is 'false'
			if ($objCarouFredSel->responsive)
			{
				$objTemplateJs->responsive = 'responsive: true';
			}

			// carouFredSel option 'cookie': default value is 'false'
			if ($objCarouFredSel->cookie)
			{
				$objTemplateJs->cookie = 'cookie: true';
			}

			// carouFredSel option 'items.visible': default value is 'null'
			switch ($objCarouFredSel->itemsVisibleSelect)
			{
				case 'variable':
					$objTemplateJs->itemsVisible = 'visible: "variable"';
					break;

				case 'fixed':
					$objTemplateJs->itemsVisible = ($objCarouFredSel->itemsVisible == '0' ? '' : 'visible: ' . $objCarouFredSel->itemsVisible);
					$objTemplateCss->itemsVisible = $objCarouFredSel->itemsVisible;
					break;

				case 'min/max':
					if (($objCarouFredSel->itemsVisibleMin != '0') && ($objCarouFredSel->itemsVisibleMax != '0'))
					{
						$objTemplateJs->itemsVisible = 'visible: { min: ' . $objCarouFredSel->itemsVisibleMin . ', max: ' . $objCarouFredSel->itemsVisibleMax . ' }';
					}
					elseif ($objCarouFredSel->itemsVisibleMax != '0')
					{
						$objTemplateJs->itemsVisible = 'visible: { max: ' . $objCarouFredSel->itemsVisibleMax . ' }';
					}
					elseif ($objCarouFredSel->itemsVisibleMin != '0')
					{
						$objTemplateJs->itemsVisible = 'visible: { min: ' . $objCarouFredSel->itemsVisibleMin . ' }';
					}
					break;
			}

			// carouFredSel option 'items.start': default value is '0'
			switch ($objCarouFredSel->itemsStartSelect)
			{
				case 'number':
					$objTemplateJs->itemsStart = ($objCarouFredSel->itemsStart == '0' ? '' : 'start: ' . $objCarouFredSel->itemsStart);
					break;

				case 'random':
					$objTemplateJs->itemsStart = 'start: "random"';
					break;

				case 'anchor':
					$objTemplateJs->itemsStart = 'start: true';
					break;
			}
		}

		// --- navigation
		if ($objCarouFredSel->useNavigation)
		{
			// carouFredSel option 'prev.key': default value is 'null'
			if ($objCarouFredSel->prevKey != 'none')
			{
				$objTemplateJs->prevKey = 'key: "' . $objCarouFredSel->prevKey . '"';
			}

			// carouFredSel option 'prev.next': default value is 'null'
			if ($objCarouFredSel->nextKey != 'none')
			{
				$objTemplateJs->nextKey = 'key: "' . $objCarouFredSel->nextKey . '"';
			}

			// carouFredSel option 'swipe.onTouch'
			if ($objCarouFredSel->swipeOnTouch)
			{
				$objTemplateJs->swipeOnTouch = 'onTouch: true';
			}

			// carouFredSel option 'swipe.onMouse'
			if ($objCarouFredSel->swipeOnMouse)
			{
				$objTemplateJs->swipeOnMouse = 'onMouse: true';
			}

			// carouFredSel option 'mousewheel'
			if ($objCarouFredSel->mousewheel)
			{
				$objTemplateJs->mousewheel = 'mousewheel: true';
			}

			if ($objCarouFredSel->navigation)
			{
				$objTemplateHtml->navigation =
				$objTemplateJs->navigation =
				$objTemplateCss->navigation = $objCarouFredSel->navigation;

				// carouFredSel option 'auto.button': default value is 'null'. Only if auto play is enabled.
				if ($objCarouFredSel->autoPlay)
				{
					$objTemplateHtml->autoButton =
					$objTemplateJs->autoButton =
					$objTemplateCss->autoButton = $objCarouFredSel->autoButton;
				}
			}

			if ($objCarouFredSel->pagination)
			{
				$objTemplateHtml->pagination =
				$objTemplateJs->pagination =
				$objTemplateCss->pagination = $objCarouFredSel->pagination;

				// carouFredSel option 'keys'
				if ($objCarouFredSel->paginationKeys)
				{
					$objTemplateJs->paginationKeys = 'keys: true';
				}
			}
		}

		// overwrite type dependent settings for background content element
		if ($strCarouFredSelType == 'caroufredsel_background')
		{
			// general size
			$objTemplateJs->width = 'width: $(window).width()';
			$objTemplateJs->height = 'height: $(window).height()';
			$objTemplateJs->align = 'align: false';

			// items size
			$objTemplateJs->itemsWidth = 'width: "variable"';
			$objTemplateJs->itemsHeight = 'width: "variable"';

			// items general
			$objTemplateJs->itemsVisible = 'visible: 1';
		}

		// carouFredSel javascript trigger mode 
		$objTemplateCss->triggerMode = 
		$objTemplateJs->triggerMode = $GLOBALS['TL_CONFIG']['dk_cfsTriggerMode'];

		// image loader 
		if ($GLOBALS['TL_CONFIG']['dk_cfsImageLoader'] != '')
		{
			$objTemplateJs->useImageLoader = $GLOBALS['TL_CONFIG']['dk_cfsImageLoader'];
		}

		// carouFredSel window resize mode 
		if ($GLOBALS['TL_CONFIG']['dk_cfsOnWindowResize'] != '')
		{
			$objTemplateJs->onWindowResize = 'onWindowResize: "' . $GLOBALS['TL_CONFIG']['dk_cfsOnWindowResize'] . '"';
		}

		// carouFredSel transition mode 
		if ($GLOBALS['TL_CONFIG']['dk_cfsTransition'])
		{
			$objTemplateJs->transition = 'transition: true';
		}

		// carouFredSel debug mode 
		if ($GLOBALS['TL_CONFIG']['dk_cfsDebug'])
		{
			$objTemplateJs->debug = 'debug: true';
		}

		// parse and add ...

		// ... global css style file
		$GLOBALS['TL_CSS'][] = 'system/modules/dk_caroufredsel/assets/css/caroufredsel.css||static';

		// ... element dependent css style file
		$GLOBALS['TL_HEAD'][] = $objTemplateCss->parse();

		// ... the carouFredSel javascript itselfs
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_caroufredsel/assets/js/jquery.carouFredSel.min.js|static';

		// ... element dependent javascript caller
		$GLOBALS['TL_JQUERY'][] = $objTemplateJs->parse();					

		if ($objCarouFredSel->autoProgress == 'pie')
		{
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_caroufredsel/assets/js/jquery.carouFredSelHelper.js|static';
		}

		// helper stuff:

		// ... additional easing methods support
		if (substr($objCarouFredSel->scrollEasing, 0, 4) == 'ease')
		{
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_caroufredsel/assets/js/jquery.easing.1.3.min.js|static';
		}

		// ... touch/swipe support
		if ($objCarouFredSel->swipeOnTouch || $objCarouFredSel->swipeOnMouse)
		{
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_caroufredsel/assets/js/jquery.touchSwipe.min.js|static';
		}

		// ... mousewheel support
		if ($objCarouFredSel->mousewheel)
		{
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_caroufredsel/assets/js/jquery.mousewheel.min.js|static';
		}

		// ... ready load javascript trigger mode
		if ($GLOBALS['TL_CONFIG']['dk_cfsTriggerMode'] == 'readyLoad')
		{
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_caroufredsel/assets/js/jquery.readyLoad.js|static';
		}

		// ... window resize event throtteling/debouncing
		if ($GLOBALS['TL_CONFIG']['dk_cfsOnWindowResize'] != '')
		{
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_caroufredsel/assets/js/jquery.ba-throttle-debounce.min.js|static';
		}

		// ... CSS transitions instead of jQuery transitions
		if ($GLOBALS['TL_CONFIG']['dk_cfsTransition'])
		{
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_caroufredsel/assets/js/jquery.transit.min.js|static';
		}

		// ... image loader
		if ($GLOBALS['TL_CONFIG']['dk_cfsImageLoader'])
		{
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_caroufredsel/assets/js/jquery.krioImageLoader-min.js|static';
		}
	}
	

	public function createTemplateDataStopElement($carouFredSelId, \Template $objTemplateHtml)
	{
		$objCarouFredSel = CarouFredSelModel::findByPk($carouFredSelId);
		if ($objCarouFredSel === null)
		{
			return;
		}

		// --- fill FE template for carouFredSel element
		
		// --- play behaviour
		if ($objCarouFredSel->usePlay && $objCarouFredSel->autoPlay && $objCarouFredSel->autoProgress != 'none')
		{	
			$objTemplateHtml->autoProgress = $objCarouFredSel->autoProgress;
		}

		// --- navigation
		if ($objCarouFredSel->useNavigation)
		{
			if ($objCarouFredSel->navigation)
			{
				$objTemplateHtml->navigation = $objCarouFredSel->navigation;
				if ($objCarouFredSel->autoPlay)
				{
					$objTemplateHtml->autoButton = $objCarouFredSel->autoButton;
				}
			}

			if ($objCarouFredSel->pagination)
			{
				$objTemplateHtml->pagination = $objCarouFredSel->pagination;
			}
		}
	}
}

<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2014 Leo Feyer
 * 
 * @package   carouFredSel 
 * @author    Dirk Klemmt 
 * @license   MIT/GPL 
 * @copyright Dirk Klemmt 2012-2014 
 */


class CarouFredSelRunonceJob extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}


	public function run()
	{
		if (\Database::getInstance()->fieldExists('dk_cfsType', 'tl_content'))
		{
			\Database::getInstance()
				->execute("UPDATE tl_content
						   SET    type = 'caroufredsel_start'
						   WHERE  type = 'caroufredsel' AND dk_cfsType = 'dk_cfsStart'");

			\Database::getInstance()
				->execute("UPDATE tl_content
						   SET    type = 'caroufredsel_stop'
						   WHERE  type = 'caroufredsel' AND dk_cfsType = 'dk_cfsStop'");

		}

		// if start element is set 'itemsStartSelect' has to be set to 'fixed'
		\Database::getInstance()
			->execute("UPDATE tl_dk_caroufredsel
					   SET    itemsStartSelect = 'fixed'
					   WHERE  itemsStart != 0");

		// if start element is random 'itemsStartSelect' has to be set to 'random'
		\Database::getInstance()
			->execute("UPDATE tl_dk_caroufredsel
					   SET    itemsStartSelect = 'random'
					   WHERE  itemsStartRnd = 1");
	}
}

$objCarouFredSelRunonceJob = new CarouFredSelRunonceJob();
$objCarouFredSelRunonceJob->run();
?>
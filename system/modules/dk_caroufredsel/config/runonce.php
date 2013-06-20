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
	}
}

$objCarouFredSelRunonceJob = new CarouFredSelRunonceJob();
$objCarouFredSelRunonceJob->run();
?>
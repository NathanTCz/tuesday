<?php
require_once 'Mobile_Detect.php';

class PagesController extends BaseController {

	public function index() {
		$agent = new Mobile_Detect();

		if ( $agent->isMobile() )
			return View::make('mobile.index');
		else
			return View::make('desktop.index');
	}

}

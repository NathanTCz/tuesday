<?php

class PagesController extends BaseController {

	public function index() {
		return View::make('landing.index');
	}

}

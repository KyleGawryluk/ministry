<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('index');
	}

	public function aboutBabu()
	{
		return View::make('about-babu');
	}

	public function aboutIndia()
	{
		return View::make('about-india');
	}

		public function believe()
	{
		return View::make('believe');
	}
}
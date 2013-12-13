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
		$pastors = Pastor::all()->take(4);
		return View::make('index',compact('pastors'));
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

			public function college()
	{
		return View::make('college');
	}

				public function christianHome()
	{
		return View::make('christian-home');
	}
}
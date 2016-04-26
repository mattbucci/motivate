<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest', ['except' => '']);
	}

	public function landing()
	{
		return view('pages.landing');
	}
}

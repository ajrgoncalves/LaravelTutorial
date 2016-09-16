<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;



class PagesController extends Controller {

	public function home() {

		$people = ['Taylor', 'Joao', 'Pedro'];
		

		return view('welcome', compact('people'));
	}

	public function about()
	{
		return view('pages.about');
	}

	
}

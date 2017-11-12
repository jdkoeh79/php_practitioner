<?php 

namespace App\Controllers;

class PagesController
{
	public function home()
	{
		return view('index');
	}

	public function about()
	{
		$company = 'MyToDo';

		return view('about', compact('company'));
	}

	public function culture()
	{
		$company = 'MyToDo';

		return view('about-culture', compact('company'));
	}

	public function contact()
	{
		return view('contact');
	}
}

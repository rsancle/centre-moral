<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panel;
use App\Social;
use App\Category;

class ActivitiesController extends Controller
{
    public function show()
	{		
		$categories = Category::with('activities')->get();
		$navbar = 0;
		$panel = Panel::all();
		$social = Social::all();

		return view('activity')->with('categories', $categories)->with('panel', $panel)->with('socials', $social)->with('navbar', $navbar);
	}
}

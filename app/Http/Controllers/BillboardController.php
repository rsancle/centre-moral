<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Show;
use App\Panel;
use App\Social;

class BillboardController extends Controller
{
    public function show($id)
	{		

		$show = Show::find($id);
		$navbar = 0;
		$panel = Panel::all();
		$social = Social::all();

		return view('billboard')->with('show', $show)->with('panel', $panel)->with('socials', $social)->with('navbar', $navbar);
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Butlleti;
use App\Panel;
use App\Social;

class ButlletiController extends Controller
{
    public function show()
	{		

		$navbar = 0;
		$butlleti = Butlleti::all();
		$panel = Panel::all();
		$social = Social::all();

		return view('butlleti')->with('butlleti', $butlleti)->with('panel', $panel)->with('navbar', $navbar)->with('socials', $social);;
	}
}

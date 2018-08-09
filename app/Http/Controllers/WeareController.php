<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;
use App\Social;
use App\Directive;

class WeareController extends Controller
{
    public function show()
	{		
		$directive = Directive::all();
		$navbar = 0;
		$panel = Config::all();
		$social = Social::all();
		
		return view('weare')->with('panel', $panel)->with('socials', $social)->with('directives', $directive)->with('navbar', $navbar);
	}
}

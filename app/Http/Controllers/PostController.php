<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;
use App\Panel;
use App\Social;

class PostController extends Controller
{
    public function show($id)
	{		

		$post = Config::find($id);

		$navbar = 0;
		$panel = Panel::all();
		$social = Social::all();

		return view('post')->with('news', $post)->with('panel', $panel)->with('socials', $social)->with('navbar', $navbar);
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Panel;
use App\Social;

class PostController extends Controller
{
    public function show($id)
	{		

		$post = Post::find($id);

		$navbar = 0;
		$panel = Panel::all();
		$social = Social::all();

		return view('post')->with('news', $post)->with('panel', $panel)->with('socials', $social)->with('navbar', $navbar);
	}
}

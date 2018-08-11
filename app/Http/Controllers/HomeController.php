<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Banner;
use App\Config;
use App\Social;
use App\Clasification;
use App\Slider;

class HomeController extends Controller
{
    public function show()
	{		
		$clasification = Clasification::with('shows')->get();
 		$navbar = 1;
 		$slider = Slider::orderBy('priority','asc')->get();
		$post = Post::orderBy('id', 'desc')->paginate(6);
		$banner = Banner::all();
		$panel = Config::all();
		$social = Social::all();

		return view('welcome')->with('news', $post)->with('clasifications', $clasification)->with('banners', $banner)->with('panel', $panel)->with('socials', $social)->with('sliders', $slider)->with('navbar', $navbar);
	}
}

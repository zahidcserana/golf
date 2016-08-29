<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BladeController extends Controller
{
	public function home_view()
	{
		$data['title'] = 'Home';
        	return view('home', $data);
	}

	public function product_view()
	{
		$data['title'] = 'Product';
		return view('product', $data);
	}

	public function about_view()
	{
		$data['title'] = 'About';
		return view('about', $data);
	}

	public function contact_view()
	{
		$data['title'] = 'Contact';
		return view('contact', $data);
	}
    	public function blog_view()
    	{
	      $data['title'] = 'Blog';
	      return view('blog', $data);
    	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\product;

class pagescontroller extends Controller
{
    public function index()
    {
    	return view ('index');
    }
    public function products()
    {
    	$category=categories::all();
    	return view('product',compact('category'));
    }
    public function front()
    {
    	$product=product::all();
    	return view('front',compact('product'));
    } 
    public function ship()
    {
    	return view ('ananta');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {   
        return view('pages.index');
    } 
    
    public function contact()
    {   
        return view('pages.contact');
    } 
    public function about()
    {   
        return view('pages.about');
    } 
    public function product()
    {   
        return view('pages.product');
    } 
}

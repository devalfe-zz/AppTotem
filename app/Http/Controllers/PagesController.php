<?php

namespace Apptotem\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
       return view('pages.index');
    }
   
    public function inicio()
    {
      
        return view('pages.inicio');
        
    }
    public function contact()
    {
       //return view('template.contact',compact('menus'));
    }
}

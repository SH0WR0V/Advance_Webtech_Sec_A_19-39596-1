<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('pages.home');
    }
    function about()
    {
        return view('pages.about');
    }
    function contact()
    {
        return view('pages.contact');
    }
    function product()
    {
       $json = array (
        "item1" => "no1",
        "item2" => "no2",
        "item3" => "no3",
       );
       
        return view('pages.products')->with('json',$json);
    }
    function teams()
    {
        return view('pages.teams');
    }
}

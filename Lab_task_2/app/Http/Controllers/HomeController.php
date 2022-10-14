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
    function login()
    {
        return view('pages.login');
    }
    function registration()
    {
        return view('pages.registration');
    }

    function registrationSubmit(Request $req)
    {
        $req->validate(
            [
                'uname'=>'required|min:5|max:20',
                'email'=>'required',
                'dob'=>'required',
                'password'=>'required'
            ],
            [
                'uname.required'=>'please provide your username'
            ]
        );
            $user=array
            (
                "uname"=>"$req->uname",
                "email"=>$req->email,
                "dob"=>"$req->dob",
                "password"=>"$req->password"
            );
            $users[]=(object)$user;
            return $users;
            
            // return view('pages.teams')->with('users',$users);
           
    }

    function loginSubmit(Request $req)
    {
        
        $req->validate(
            [
                'uname'=>'required|min:5|max:20',
                'password'=>'required'
            ]);
            
            $list = array ("showrov" => "12345");
    // if ((array_key_exists("$req->uname",$list) && (in_array("$req->password",$list))
    if (array_key_exists("$req->uname",$list) && in_array("$req->password",$list))
    {
        //  if (in_array("$req->password",$list))
        //  {
            echo "Log In Successful!"; 
        //  }
        // else   
        // {
            // echo "Log In Unsuccessful";
        // } 
    }
    else
    {
        echo "Log In Unsuccessful!";
    }
   
    }

    function contactSubmit(Request $req)
    {
        $req->validate(
            [
                
                'email'=>'required',          
                'contact'=>'required'
            ]);
            $user=array
            (
                "email"=>$req->email,
                "contact"=>"$req->contact"
            );
            $users[]=(object)$user;
            return $users;
    }
    
}

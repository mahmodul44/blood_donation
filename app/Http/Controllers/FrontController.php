<?php

namespace App\Http\Controllers;
use App\Bedonar;
use\App\Blood;
use\App\Gallery;
use Illuminate\Http\Request;
use App\User;
class FrontController extends Controller
{
    public function index(){
        return view('Front.layouts.master');
    }
    public function about(){
        return view('Front.pages.about');
    }
    public function whyblood_donar(){
        return view('Front.pages.whyblood_donar');
    }
    public function bedonar(){
        return view('Front.pages.bedonar');
    }
    public function search_donar(){
        $search_donar=Blood::all();
        return view('Front.pages.search_donar')->with('search_donar',$search_donar);
    }
    public function front_gallery(){
        $gallery=Gallery::all();
        return view('Front.pages.gallery')->with('gallery',$gallery);
    }
    public function contact(){
        return view('Front.pages.contact');
    }
    public function view_donar(){
        $search_text= $_GET['query'];
        $search_location=$_GET['location'];
     
        $search_view=Bedonar::where('bloodgroup',$search_text )->where('address',$search_location )->get(); 
        return view('Front.pages.view_donar')->with('search_view',$search_view);
        

    }
    public function userlist(){
     $users=User::all(); 
    
     return view('layouts.pages.userlist')->with('users',$users);
    }
    public function search(){
       
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InspiredPictures;

class PagesController extends Controller
{
    public function index(){
        $title = 'Boys and Girls';
        return view('Pages.index')->with('title',$title);
    }

    public function inspired()
    {
        $inspiredPictures = InspiredPictures::get();

        return view('Pages.index')->with('inspiredPictures', $inspiredPictures);
    }

    public function login(){
        $title = 'Admin Login';
        return view('Pages.login')->with('title',$title);
    }

    //Boys

    public function Boys_Baby(){
        $title = 'Boys Baby';
        return view('layout.Boys')->with('title',$title);
    }

    public function Boys_Mini(){
        $title = 'Boys Mini';
        return view('layout.Boys')->with('title',$title);
    }

    public function Boys_Junior(){
        $title = 'Boys Junior';
        return view('layout.Boys')->with('title',$title);
    }

    public function Boys_Kids(){
        $title = 'Boys Kids';
        return view('layout.Boys')->with('title',$title);
    }

    //Girls

    public function Girls_Baby(){
        $title = 'Girls Baby';
        return view('layout.Boys')->with('title',$title);
    }

    public function Girls_Mini(){
        $title = 'Girls Mini';
        return view('layout.Boys')->with('title',$title);
    }

    public function Girls_Kids(){
        $title = 'Girls Kids';
        return view('layout.Boys')->with('title',$title);
    }

    public function Girls_Junior(){
        $title = 'Girls Junior';
        return view('layout.Boys')->with('title',$title);
    }

    //Search Boys
    public function searchBoysBaby(){
        $title = 'Boys Baby';
        return view('layout.Boys')->with('title',$title);
    }

    public function searchBoysMini(){
        $title = 'Boys Mini';
        return view('layout.Boys')->with('title',$title);
    }

    public function searchBoysKids(){
        $title = 'Boys Kids';
        return view('layout.Boys')->with('title',$title);
    }

    public function searchBoysJunior(){
        $title = 'Boys Kids';
        return view('layout.Boys')->with('title',$title);
    }

    //Search Girls
    public function searchGirlsBaby(){
        $title = 'Girls Baby';
        return view('layout.Boys')->with('title',$title);
    }

    public function searchGirlsMini(){
        $title = 'Girls Mini';
        return view('layout.Boys')->with('title',$title);
    }

    public function searchGirlsKids(){
        $title = 'Girls Kids';
        return view('layout.Boys')->with('title',$title);
    }

    public function searchGirlsJunior(){
        $title = 'Girls Junior';
        return view('layout.Boys')->with('title',$title);
    }


}

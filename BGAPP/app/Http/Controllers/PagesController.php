<?php

namespace App\Http\Controllers;

use App\inspired_pictures;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Boys and Girls';
        return view('Pages.index')->with('title',$title);
    }

    public function inspired()
    {
        $inspiredPictures = inspired_pictures::get();

        return view('Pages.index')->with('inspiredPictures', $inspiredPictures);
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

    public function voorwaarden(){
        $title = 'Gebruikersvoorwaarden';
        return view('Pages.Sections.Gebruikersvoorwaarden');
    }


}

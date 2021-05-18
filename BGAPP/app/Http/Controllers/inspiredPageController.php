<?php

namespace App\Http\Controllers;

use App\InspiredPictures;
use Illuminate\Http\Request;

class inspiredPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inspiredPictures = InspiredPictures::get();

        return view('/Pages/index')->with('inspired_pictures', $inspiredPictures);
    }

    public function show($slug)
    {
        $inspiredPicture = InspiredPictures::where('slug' , $slug)->firstorFail();

        return view('inspiredPicture')->with('inspired_picturess' , $inspiredPicture);
    }
}

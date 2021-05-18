<?php

namespace App\Http\Controllers;

use App\inspired_pictures;
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
        $inspiredPictures = inspired_pictures::get();

        return view('/Pages/index')->with('inspired_pictures', $inspiredPictures);
    }

    public function show($slug)
    {
        $inspiredPicture = inspired_pictures::where('slug' , $slug)->firstorFail();

        return view('inspiredPicture')->with('inspired_picturess' , $inspiredPicture);
    }
}

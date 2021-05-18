<?php

namespace App\Http\Controllers;

use App\InspiredPictures;
use Illuminate\Http\Request;

class InspiredController extends Controller
{
   function Inspired()
   {
       $data=InspiredPictures::all();

       return view('index',['inspiredPicture'=>$data]);
   }
}

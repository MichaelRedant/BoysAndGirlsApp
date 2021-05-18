<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_Boys_Junior;
use App\Product_Boys_Kids;
use App\Product_Boys_Mini;

class ProductController extends Controller
{
    //
    function Boys_Junior()
    {

        $data=Product_Boys_Junior::all();

        return view('product',['product'=>$data]);
    }

    function Boys_Kids()
    {

        $data=Product_Boys_Kids::all();

        return view('product',['product'=>$data]);
    }

    function Boys_Mini()
    {

        $data=Product_Boys_Mini::all();

        return view('product',['product'=>$data]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    function Boys_Junior()
    {

        $data=Product::all();

        return view('product',['product'=>$data]);
    }

    function Boys_Kids()
    {

        $data=Product::all();

        return view('product',['product'=>$data]);
    }

    function Boys_Mini()
    {

        $data=Product::all();

        return view('product',['product'=>$data]);
    }
}
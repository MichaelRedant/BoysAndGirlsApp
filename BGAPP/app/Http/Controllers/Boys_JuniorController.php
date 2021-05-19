<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_Boys_Baby;
use App\Products;
use App\Product_Boys_Kids;
use App\Product_Boys_Mini;

class Boys_JuniorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function junior()
    {
        /* $products = Product_Boys_Junior::get();

        return view('Pages.Boys.junior.Boys_jr_ec')->with('products', $products); */

        $products = Products::get()->where('gender','equals','1')->where('category','equals','4');
        $products->sortByDesc('created_at');
        return view('Pages.Boys.junior.Boys_jr_ec')->with('products', $products);
        
    }

    public function kids()
    {
        /* $products = Product_Boys_Kids::get();

        return view('Pages.Boys.Kids.Boys_kids_ec')->with('products', $products); */

        $products = Products::get()->where('gender','equals','1')->where('category','equals','3');
        $products->sortByDesc('created_at');
        return view('Pages.Boys.Kids.Boys_kids_ec')->with('products', $products);
    }

    public function Mini()
    {
        /* $products = Product_Boys_Mini::get();

        return view('Pages.Boys.Mini.Boys_mini_ec')->with('products', $products); */

        $products = Products::get()->where('gender','equals','1')->where('category','equals','2');
        $products->sortByDesc('created_at');
        return view('Pages.Boys.Mini.Boys_mini_ec')->with('products', $products);
    }

    public function Baby()
    {
        /* $products = Product_Boys_Baby::get();

        return view('Pages.Boys.Baby.Boys_baby_ec')->with('products', $products); */

        $products = Products::get()->where('gender','equals','1')->where('category','equals','1');
        $products->sortByDesc('created_at');
        return view('Pages.Boys.Baby.Boys_baby_ec')->with('products', $products);
    }

}

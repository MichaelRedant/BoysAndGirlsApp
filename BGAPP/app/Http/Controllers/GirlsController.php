<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product_Girls_Baby;
use App\Products;
use App\Product_Girls_Kids;
use App\Product_Girls_Mini;
use Illuminate\Http\Request;

class GirlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function junior()
    {
        /* $products = Product_Girls_Junior::get();

        return view('Pages.Girls.junior.Girls_junior_ec')->with('products', $products); */

        $products = Products::get()->where('gender','equals','2')->where('category','equals','8');
        $products->sortByDesc('created_at');
        return view('Pages.Girls.junior.Girls_junior_ec')->with('products', $products);
    }

    public function kids()
    {
        /* $products = Product_Girls_Kids::get();

        return view('Pages.Girls.Kids.Girls_kids_ec')->with('products', $products); */

        $products = Products::get()->where('gender','equals','2')->where('category','equals','7');
        $products->sortByDesc('created_at');
        return view('Pages.Girls.Kids.Girls_kids_ec')->with('products', $products);
    }

    public function Mini()
    {
        /* $products = Product_Girls_Mini::get();

        return view('Pages.Girls.Mini.Girls_mini_ec')->with('products', $products); */

        $products = Products::get()->where('gender','equals','2')->where('category','equals','6');
        $products->sortByDesc('created_at');
        return view('Pages.Girls.Mini.Girls_mini_ec')->with('products', $products);
    }

    public function Baby()
    {
        /* $products = Product_Girls_Baby::get();

        return view('Pages.Girls.Baby.Girls_baby_ec')->with('products', $products); */

        $products = Products::get()->where('gender','equals','2')->where('category','equals','5');
        $products->sortByDesc('created_at');
        return view('Pages.Girls.Baby.Girls_baby_ec')->with('products', $products);
    }
/* 
    public function show($slug)
    {
        $product = Product::where('slug' , $slug)->firstorFail();

        return view('product')->with('product' , $product);
    } */
}

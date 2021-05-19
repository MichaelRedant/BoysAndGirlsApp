<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Support\Facades\Request;

class ProductsController extends Controller
{
    public function newBoys()
    {
        /* return Products::table('Products')->order_by('upload_time', 'desc')->first(); */

        $products = Products::get()->where('gender','equals','1')->take(10);
        $products->sortByDesc('created_at');
        return view('Pages.Boys.NewBoys')->with('products', $products);

    }

    public function newGirls()
    {
        /* return Products::table('Products')->order_by('upload_time', 'desc')->first(); */

        $products = Products::get()->where('gender','equals','2')->take(10);
        $products->sortByDesc('created_at');
        return view('Pages.Girls.NewGirls')->with('products', $products);

    }
}

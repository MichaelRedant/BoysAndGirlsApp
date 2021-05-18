<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product_Boys_Baby;
use App\Product_Boys_Kids;
use App\Product_Boys_Mini;
use App\Product_Girls_Baby;
use App\Product_Girls_Junior;
use App\Product_Girls_Kids;
use App\Product_Girls_Mini;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchBoysBaby(Request $request){
        $query = $request->input('query');

        $products = Product_Boys_Baby::where('name','like',"%$query%")->get();
        
        return view('Pages.Components.Search.search-results-BoysBaby')->with('products',$products);
    }

    public function searchBoysMini(Request $request){
        $query = $request->input('query');

        $products = Product_Boys_Mini::where('name','like',"%$query%")->get();
        
        return view('Pages.Components.Search.search-results-BoysMini')->with('products',$products);
    }

    public function searchBoysKids(Request $request){
        $query = $request->input('query');

        $products = Product_Boys_Kids::where('name','like',"%$query%")->get();
        
        return view('Pages.Components.Search.search-results-BoysKids')->with('products',$products);
    }

    public function searchBoysJunior(Request $request){
        $query = $request->input('query');

        $products = Product::where('name','like',"%$query%")->get();
        
        return view('Pages.Components.Search.search-results-BoysJunior')->with('products',$products);
    }

    public function searchGirlsBaby(Request $request){
        $query = $request->input('query');

        $products = Product_Girls_Baby::where('name','like',"%$query%")->get();
        
        return view('Pages.Components.Search.search-results-GirlsBaby')->with('products',$products);
    }

    public function searchGirlsMini(Request $request){
        $query = $request->input('query');

        $products = Product_Girls_Mini::where('name','like',"%$query%")->get();
        
        return view('Pages.Components.Search.search-results-GirlsMini')->with('products',$products);
    }

    public function searchGirlsKids(Request $request){
        $query = $request->input('query');

        $products = Product_Girls_Kids::where('name','like',"%$query%")->get();
        
        return view('Pages.Components.Search.search-results-GirlsKids')->with('products',$products);
    }

    public function searchGirlsJunior(Request $request){
        $query = $request->input('query');

        $products = Product_Girls_Junior::where('name','like',"%$query%")->get();
        
        return view('Pages.Components.Search.search-results-GirlsJunior')->with('products',$products);
    }

    
}

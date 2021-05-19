<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product_Boys_Baby;
use App\Product_Boys_Junior;
use App\Product_Boys_Kids;
use App\Product_Boys_Mini;
use App\Product_Girls_Baby;
use App\Product_Girls_Junior;
use App\Product_Girls_Kids;
use App\Product_Girls_Mini;
use App\Products;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    //Boys
    public function searchBoysBaby(Request $request){
        $query = $request->input('query');

        $products = Products::where('name','like',"%$query%")->where('category','=', '1')->get();
        
        return view('Pages.Components.Search.search-results-BoysBaby')->with('products',$products);
    }

    public function searchBoysMini(Request $request){
        $query = $request->input('query');

        $products = Products::where('name','like',"%$query%")->where('category','=', '2')->get();
        
        return view('Pages.Components.Search.search-results-BoysMini')->with('products',$products);
    }

    public function searchBoysKids(Request $request){
        $query = $request->input('query');

        $products = Products::where('name','like',"%$query%")->where('category','=', '3')->get();
        
        return view('Pages.Components.Search.search-results-BoysKids')->with('products',$products);
    }

    public function searchBoysJunior(Request $request){
        $query = $request->input('query');

        $products = Products::where('name','like',"%$query%")->where('category','=', '4')->get();
        
        return view('Pages.Components.Search.search-results-BoysJunior')->with('products',$products);
    }

    public function searchBoys(Request $request){
        $query = $request->input('query');

        $products = Products::where('name','like',"%$query%")->where('gender','=', '1')->get();
        
        return view('Pages.Components.Search.search-results-Boys')->with('products',$products);
    }


    //Girls
    public function searchGirlsBaby(Request $request){
        $query = $request->input('query');

        $products = Products::where('name','like',"%$query%")->where('category','=', '5')->get();
        
        return view('Pages.Components.Search.search-results-GirlsBaby')->with('products',$products);
    }

    public function searchGirlsMini(Request $request){
        $query = $request->input('query');

        $products = Products::where('name','like',"%$query%")->where('category','=', '6')->get();
        
        return view('Pages.Components.Search.search-results-GirlsMini')->with('products',$products);
    }

    public function searchGirlsKids(Request $request){
        $query = $request->input('query');

        $products = Products::where('name','like',"%$query%")->where('category','=', '7')->get();
        
        return view('Pages.Components.Search.search-results-GirlsKids')->with('products',$products);
    }

    public function searchGirlsJunior(Request $request){
        $query = $request->input('query');

        $products = Products::where('name','like',"%$query%")->where('category','=', '8')->get();
        
        return view('Pages.Components.Search.search-results-GirlsJunior')->with('products',$products);
    }

    public function searchGirls(Request $request){
        $query = $request->input('query');

        $products = Products::where('name','like',"%$query%")->where('gender','=', '2')->get();
        
        return view('Pages.Components.Search.search-result-Girls')->with('products',$products);
    }

    
}

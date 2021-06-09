<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    public function newBoys()
    {

        $products = Products::get()->where('gender','equals','1')->take(10);
        $products->sortByDesc('created_at');
        return view('Pages.Boys.NewBoys')->with('products', $products);

    }

    public function newGirls()
    {

        $products = Products::get()->where('gender','equals','2')->take(10);
        $products->sortByDesc('created_at');
        return view('Pages.Girls.NewGirls')->with('products', $products);

    }

    public function index()
    {
        $product = Products::all();
        return view('Pages.Admin.AdminProducts',compact('product'));
    }

    public function create()
    {
        return view('Pages.Admin.CreateAdminProducts');
    }

    public function store(Request $request)
    {
        $product = new Products;
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->gender = $request->input('gender');
        $product->description = $request->input('description');
        if($request->hasfile('product_image'))
        {
            $file = $request->file('product_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('img/Products/',$filename);
            $product->product_image = $filename;
        }
        $product->save();

        return redirect('products')->with('status','De afbeelding is succesvol opgeslagen');
    }

    public function edit($id)
    {
        $product = Products::find($id);
        return view('Pages.Admin.EditAdminProducts',compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->gender = $request->input('gender');
        $product->description = $request->input('description');
        //controle of de afbeelding reeds bestaat indien wel verwijder en update afbeelding
        if($request->hasfile('product_image'))
        {
            $destination = 'img/Products/'.$product->product_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('product_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('img/Products/',$filename);
            $product->product_image = $filename;
        }
        $product->update();

        return redirect('products')->with('status','De afbeelding is succesvol geüpdatet');

    }
    public function delete($id)
    {
        $product = Products::find($id);
        $destination = 'img/Products'.$product->product_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $product->delete();
        return redirect('products')->with('status','De afbeelding is succesvol verwijderd');
    }

}

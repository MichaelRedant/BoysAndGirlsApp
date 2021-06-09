<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InspiredController;
use App\Http\Controllers\inspiredPageController;
use App\Http\Controllers\ProductsController;
Use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Index
// Route::get('/', 'PagesController@index');
Route::get('/','PagesController@index')->name('home');

//New
Route::get('/Boys_New','ProductsController@newBoys')->name('NewBoys');
Route::get('/Girls_New','ProductsController@newGirls')->name('NewGirls');
//Search
Route::get('/search_Boys_Baby','SearchController@searchBoysBaby')->name('searchBoysBaby');
Route::get('/search_Boys_Mini','SearchController@searchBoysMini')->name('searchBoysMini');
Route::get('/search_Boys_Kids','SearchController@searchBoysKids')->name('searchBoysKids');
Route::get('/search_Boys_Junior','SearchController@searchBoysJunior')->name('searchBoysJunior');
Route::get('/search_Boys','SearchController@searchBoys')->name('searchBoys');

Route::get('/search_Girls_Baby','SearchController@searchGirlsBaby')->name('searchGirlsBaby');
Route::get('/search_Girls_Mini','SearchController@searchGirlsMini')->name('searchGirlsMini');
Route::get('/search_Girls_Kids','SearchController@searchGirlsKids')->name('searchGirlsKids');
Route::get('/search_Girls_Junior','SearchController@searchGirlsJunior')->name('searchGirlsJunior');
Route::get('/search_Girls','SearchController@searchGirls')->name('searchGirls');

// //Inspired
// Route::get('/#inspired','PagesController@inspired');

//Boys
//Baby
Route::get('/Boys_Baby','Boys_JuniorController@baby')->name('BoysBaby');
//Mini
Route::get('/Boys_Mini','Boys_JuniorController@mini')->name('BoysMini');
//Kids
Route::get('/Boys_Kids','Boys_JuniorController@kids')->name('BoysKids');
//Junior
Route::get('/Boys_Junior','Boys_JuniorController@junior')->name('BoysJunior');

//Girls
//Baby
Route::get('/Girls_Baby','GirlsController@baby')->name('GirlsBaby');
//Mini
Route::get('/Girls_Mini','GirlsController@mini')->name('GirlsMini');
//Kids
Route::get('/Girls_Kids','GirlsController@kids')->name('GirlsKids');
//Junior
Route::get('/Girls_Junior','GirlsController@junior')->name('GirlsJunior');

//Voorwaarden
Route::get('/Gebruikersvoorwaarden','PagesController@voorwaarden')->name('gebruikersvoorwaarden');


//admin
Route::post('/login', 'UserController@login');
Route::get('/login',function(){
    return view('Pages.login');
});

Route::get('/admin','AdminController@index')->name('admin');

//admin-products
Route::get('products',[ProductsController::class,'index'])->name('adminProducts');
Route::get('add-product',[ProductsController::class,'create'])->name('addProducts');
Route::post('add-product',[ProductsController::class,'store']);
Route::get('edit-product/{id}',[ProductsController::class,'edit'])->name('edit-product');
Route::put('updateProducts/{id}',[ProductsController::class,'update'])->name('updateProducts');
Route::get('delete-product/{id}',[ProductsController::class,'delete'])->name('delete-product');

//admin-inspired
Route::get('inspired_pictures',[inspiredPageController::class,'adminIndex'])->name('adminInspired');
Route::get('add-inspired',[inspiredPageController::class,'create'])->name('addInspired');
Route::post('add-inspired',[inspiredPageController::class,'store']);
Route::get('edit-inspired/{id}',[inspiredPageController::class,'edit'])->name('edit-inspired');
Route::put('updateInspired/{id}',[inspiredPageController::class,'update'])->name('updateInspired');
Route::get('delete-inspired/{id}',[inspiredPageController::class,'delete'])->name('delete-inspired');

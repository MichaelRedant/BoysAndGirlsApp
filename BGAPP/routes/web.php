<?php

use App\Http\Controllers\InspiredController;
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
Route::get('/index', 'PagesController@index');

//Search
Route::get('/search_Boys_Baby','SearchController@searchBoysBaby')->name('searchBoysBaby');
Route::get('/search_Boys_Mini','SearchController@searchBoysMini')->name('searchBoysMini');
Route::get('/search_Boys_Kids','SearchController@searchBoysKids')->name('searchBoysKids');
Route::get('/search_Boys_Junior','SearchController@searchBoysJunior')->name('searchBoysJunior');

Route::get('/search_Girls_Baby','SearchController@searchGirlsBaby')->name('searchGirlsBaby');
Route::get('/search_Girls_Mini','SearchController@searchGirlsMini')->name('searchGirlsMini');
Route::get('/search_Girls_Kids','SearchController@searchGirlsKids')->name('searchGirlsKids');
Route::get('/search_Girls_Junior','SearchController@searchGirlsJunior')->name('searchGirlsJunior');

//Inspired
Route::get('/index','PagesController@inspired');

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

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $users = User::first();
        return view('home')->with('users',$users);
    }

    

}

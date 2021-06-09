<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Check data from the form
    function login(Request $req)
    {

        // return $req->input();

        // return User::where(['email'=>$req->email])->first();

        $user = User::where(['email' => $req->email])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or Password is incorrect";
        } else {
            $req->session()->put('user', $user);
            return redirect('/admin');
        }
    }
}

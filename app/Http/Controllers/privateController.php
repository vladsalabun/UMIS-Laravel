<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;

class privateController extends Controller
{
    // Вихід з особистого кабінету:
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    // Сторінка homepage:
    public function homepage()
    {
        if(Auth::check()) {
            return view('home');
        } else {
            return Redirect::to('/');
        }
    }

}

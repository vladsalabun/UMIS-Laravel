<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class usersController extends Controller
{
    //
    public function users() 
    {
        
        // Отримую останній ІД:
        $lastWordId = App\test::getLastWordId();
        
        // Запит усіх користувачів:
        $users = App\usersModel::getAllUsers();
        
        return view('pages/users', compact('users','lastWordId'));
    }
}

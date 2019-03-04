<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Додаємо простір імен:
use App;

class apiController extends Controller
{
    //
    public function apiInfo() 
    {
        // Отримую останній ІД:
        $lastWordId = App\test::getLastWordId();  
        
        return view('pages/apiInfo', compact('lastWordId'));
    }
}

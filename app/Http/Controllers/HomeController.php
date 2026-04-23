<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $appName = "LezzetGuide";
        
        
        return view('home.index', compact('appName'));
    }
}

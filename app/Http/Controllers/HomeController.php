<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Food;

class HomeController extends Controller
{
    public function home()
    {
        $restaurants = Restaurant::inRandomOrder()->take(4)->get();
        $categories = Category::take(4)->get();
        $foods = Food::orderBy('like_count', 'desc')->take(4)->get();

        return view('home.index', compact('restaurants', 'categories', 'foods'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Food;
use \App\Models\Category;
use \App\Models\Restaurant;
class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::with(['restaurant', 'category'])->get();
        return view('foods.index', compact('foods'));
    }   

    public function show($id)
    {
        $food = Food::with(['restaurant', 'category'])->findOrFail($id);
        return view('foods.show', compact('food'));
    }
}




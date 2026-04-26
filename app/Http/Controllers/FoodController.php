<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Food;
use \App\Models\Category;
use \App\Models\Restaurant;
class FoodController extends Controller
{
    public function index(Request $request)
    {

        $query = Food::query();
        if ($request->has('category_id')){
            $query->where('category_id',$request->category_id);
        }
        $foods = $query->with(['restaurant', 'category'])->get();
        return view('foods.index', compact('foods'));
    }   

    public function show($id)
    {
        $food = Food::with(['restaurant', 'category'])->findOrFail($id);
        return view('foods.show', compact('food'));
    }
}




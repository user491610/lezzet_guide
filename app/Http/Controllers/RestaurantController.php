<?php

namespace App\Http\Controllers;
use \App\Models\Food;
use \App\Models\Category;
use \App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(){
       
        $restaurants = \App\Models\Restaurant::all();
        return view('restaurants.index',compact('restaurants'));
    }
    
    public function show($id){
        $restaurant = Restaurant::with('foods')->findOrFail($id);
        return view('restaurants.show',compact('restaurant'));
        


    }
}

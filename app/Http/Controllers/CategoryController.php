<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{   
    // public function index()
    // {

    //     dd('ok');
    // }
    public function index()
    {
        $categories = \App\Models\Category::all();
        return view('categories.index', compact('categories'));
    }
    
    public function categoriesShow($id) 
    {   
        
        $category = \App\Models\Category::where('id',$id)->firstOrFail();;

        return view('categories.show',compact('category'));
    }  
}

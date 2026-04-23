<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{   
        public function categoriesindex()
                            {
        $categories = Category::all();
        
        return view('categories.index', compact('categories'));
         }

    public function categoriesshow($id){
            
        $category = Category::with('foods')->findOrFail($id);
        return view('categories.show', compact('category'));
    }
}

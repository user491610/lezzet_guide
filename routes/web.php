<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);

Route::get('/foods', [App\Http\Controllers\FoodController::class, 'index'])->name('foods.index');

Route::get('/foods/{id}', [App\Http\Controllers\FoodController::class, 'show'])->name(('foods.show'));

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/show/{id}', [App\Http\Controllers\CategoryController::class, 'categoriesShow']);

Route::get('/restaurants', [App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurants.index');

Route::get('/restaurants/{id}', [App\Http\Controllers\RestaurantController::class, 'show'])->name('restaurants.show');


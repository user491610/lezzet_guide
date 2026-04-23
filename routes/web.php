<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);

Route::get('/foods', [App\Http\Controllers\FoodController::class, 'foodsIndex']);

Route::get('/foods/show/{number}', [App\Http\Controllers\FoodController::class, 'foodsShow']);

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'categoriesIndex']);

Route::get('/categories/show/{id}', [App\Http\Controllers\CategoryController::class, 'categoriesShow']);

Route::get('/restaurants', [App\Http\Controllers\RestaurantController::class, 'restaurantIndex']);


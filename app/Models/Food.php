<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    use hasFactory;

    protected $fillable = [
        'category_id',
        'restaurant_id',
        'name',
        'code',
        'like_count',
    ];
    public function category(){
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function restaurant(){
        return $this->belongsTo(\App\Models\Restaurant::class);
    }
}

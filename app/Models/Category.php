<?php

namespace App\Models;
use \App\Models\Food;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function foods()
    {
        return $this->hasMany(Food::class);
    }
    protected $fillable = ['name'];
}

<?php

namespace App\Models;
use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use hasFactory;
    protected $fillable = ['name','address','phone_number','rating',]; 
    public function foods(){
        return $this->hasMany(Food::class);
    }
}

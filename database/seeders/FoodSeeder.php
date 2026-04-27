<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Food;
class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $foods = [
            ['name' =>'Tombik Doner','category_id'=>3,'restaurant_id'=>1,'price'=>45,'code'=>'TGM-0032','like_count'=>32786],
            ['name' =>'Lawash Doner','category_id'=>3,'restaurant_id'=>1,'price'=>35,'code'=>'TGM-0034','like_count'=>22839],
            ['name' =>'Crispy Burger','category_id'=>3,'restaurant_id'=>3,'price'=>40,'code'=>'KDU-1165','like_count'=>26489],
            ['name' =>'Double Chicken','category_id'=>3,'restaurant_id'=>2,'price'=>50,'code'=>'BGS-3321','like_count'=>15849],
            ['name' =>'Merjimek Corba ','category_id'=>2,'restaurant_id'=>1,'price'=>45,'code'=>'TGM-0232','like_count'=>12232],
            ['name' =>' Sezer salad ','category_id'=>1,'restaurant_id'=>1,'price'=>60,'code'=>'TGM-0284','like_count'=>14236],
            ['name' =>' Goşa çynar ','category_id'=>5,'restaurant_id'=>7,'price'=>6,'code'=>'RTS-5667','like_count'=>2365],
            ['name' =>' Kola-çynar 1L ','category_id'=>5,'restaurant_id'=>7,'price'=>10,'code'=>'TGM-3244','like_count'=>9856],
      ];


      foreach($foods as $food){
          
          \App\Models\Food::create([
              'name'=>$food['name'],
              'category_id'=>$food['category_id'],
              'restaurant_id'=>$food['restaurant_id'],
              'price'=>$food['price'],
              'code'=>$food['code'],
              'like_count'=>$food['like_count'],
            ]);
        }
        
    }
}

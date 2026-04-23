<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{       
    
    public function run(): void
{
    $restaurants = [
        ['name'=>'Tagamchy','address' => 'Kemine Street 132','rating' => 4.5,'phone_number' => '6252655'],
        ['name'=>'Burger Station','address' => 'Magtymguly Shayoly 73 Turkmenistan SM 1-nji gat','rating' => 3.9,'phone_number' => '63646969'],
        ['name' => 'Kudo Kudo','address' => 'Magtymguly Shayoly Arkac SDM 1-nji gat ','rating' => 4.5,'phone_number' => '65989785'],
         ];



    foreach($restaurants as $restaurant){

        \App\Models\Restaurant::create([
            'name'=>$restaurant['name'],
            'address'=>$restaurant['address'],
            'rating'=>$restaurant['rating'],
            'phone_number'=>$restaurant['phone_number'],
        ]);
    }

    // Restaurant::create([
    //     'name' => 'Burger Station',
    //     
    // ]);

    // Restaurant::create([
    //     'name' => 'Kudo Kudo',
    //     'address' => 'Magtymguly Shayoly Arkac SDM 1-nji gat ',
    //     'rating' => 4.5,
    //     'phone_number' => '65989785'
    // ]);

    }
}

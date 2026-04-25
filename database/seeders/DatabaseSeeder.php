<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        


        $this->call([
            \Database\Seeders\CategorySeeder::class,
            \Database\Seeders\RestaurantSeeder::class ,
            \Database\Seeders\FoodSeeder::class,
            \Database\Seeders\CategorySeeder::class 
        ]);
        \App\Models\Food::factory(40)->create();
    }
}

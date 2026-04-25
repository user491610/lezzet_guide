<?php

namespace Database\Seeders;
use \App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    // /**
    //  * Run the database seeds.
    //  */
    public function run(): void
    {
     
        $categories = [
            'Appetizers/Starter',
            'Main Course',
            'Fast food',
            'Desserts',
            'Beverages',
            'Seafood',
            'Breakfast',

        ];

        foreach($categories as $category){
            \App\Models\Category::create([
                'name'=>$category,
            ]);
        };
    }
}

<?php

namespace Database\Factories;

use App\Models\Food;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id'=>Category::inRandomOrder()->first()->id?? 1,
            'restaurant_id'=>Restaurant::inRandomOrder()->first()->id?? 1,
            'name'=>fake()->words(2,true),
            'price'=>fake()->randomNumber(2,20,500),
            'code'=>$this->faker->unique(2,true)->bothify('FOOD-####'),
            'like_count'=>fake()->numberBetween(0,10000),
        ];
    }
}

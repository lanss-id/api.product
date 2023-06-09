<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'name' => $name = $this->faker->sentence(),
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(25),
            'price' => rand(111111, 9999999),
        ];
    }
}

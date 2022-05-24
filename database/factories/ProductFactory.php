<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->text(25);
        $price = $this->faker->numberBetween($min = 100, $max =900);
        $category = $this->faker->numberBetween($min = 1 , $max = 5 );


        return [
            'name' => $name,
            'description' => $this->faker->text(100),
            'image' => $this->faker->imageUrl($width = 140,
                $height = 300),
            "category_id" => $category,
            'price' => $price,

        ];
    }
}

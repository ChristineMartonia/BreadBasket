<?php

namespace Database\Factories;

use Facade\Ignition\Support\FakeComposer;
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
        return [
        'shop_name' => $this->faker->name,
        'title' => $this->faker->name,
        'price' => $this->faker->randomFloat(2,100,5000),
        'category' => $this->faker->name,
        'description' =>$this->faker->sentence(),
        'image'=> $this->faker->imageUrl(),
        ];
    }
}

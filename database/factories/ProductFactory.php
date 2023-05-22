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
        return [
            "designation" => $this->faker->word,
            "prix" => $this->faker->numberBetween(300, 10000),
            "qte_stock" => $this->faker->numberBetween(9, 100)
        ];
    }
}

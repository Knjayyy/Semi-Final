<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $stat = ['Broken', 'Available', 'Unavailable', 'Sold', 'Reserved'];
        return [
            'status'=> $this->faker->randomElement($stat),
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'values' => $this->faker->numberBetween($min = 1, $max = 10000),
        ];
    }
}


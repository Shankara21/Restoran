<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;
        $position = $this->faker->jobTitle;
        return [
            'name' => $name,
            'position' => $position,
        ];
    }
}

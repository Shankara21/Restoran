<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $service = $this->faker->sentence(3);
        $description = $this->faker->paragraph(1);
        return [
            'name' => $service,
            'description' => $description,
        ];
    }
}

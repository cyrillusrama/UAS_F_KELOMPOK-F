<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaketWisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'nama' => $this->faker->name(),
            'deskripsi' => $this->faker->paragraph(),
            'harga' => rand(0, 9),
            'address' => $this->faker->paragraph(1)
        ];
    }
}

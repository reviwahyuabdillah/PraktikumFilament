<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MakulFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode' => $this->faker->unique()->bothify('MK##'),
            'nama' => $this->faker->words(3, true),
            'sks' => $this->faker->randomElement([1, 2, 3, 4]),
        ];
    }
}

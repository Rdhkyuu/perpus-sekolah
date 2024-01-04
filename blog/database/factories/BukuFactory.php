<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'nama' => $this->faker->text($maxNbChars = 15),
          'penulis' => $this->faker->name(),
          'penerbit' => $this->faker->text($maxNbChars = 8),
          'tahun_cetak' => $this->faker->year($max = 'now'),  
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelajarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->numerify("########"),
            'nama' => $this->faker->name(),
            'kelas' => $this->faker->randomElement($array = ["X", "XI", "XII"]),
            'jurusan' => $this->faker->randomElement($array = ["RPL", "AKL", "ULW", "TKI", "TB", "TKKR"]),
            
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->text($maxNbChars = 15),
            'penulis' => $this->faker->name(),
            'penerbit' => $this->faker->text($maxNbChars = 8),
            'tahun_cetak' => $this->faker->year($max = 'now'),
        ];
    }
}

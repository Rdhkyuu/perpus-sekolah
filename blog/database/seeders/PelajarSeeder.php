<?php

namespace Database\Seeders;

use App\Models\Pelajar;
use Illuminate\Database\Seeder;

class PelajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelajar::factory()->count(50)->create();
    }
}

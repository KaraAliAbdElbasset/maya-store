<?php

namespace Database\Seeders;

use App\Models\Functionality;
use Illuminate\Database\Seeder;

class FunctionalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Functionality::factory(10)->create();
    }
}

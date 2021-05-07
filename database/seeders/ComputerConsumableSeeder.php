<?php

namespace Database\Seeders;

use App\Models\ComputerConsumable;
use Illuminate\Database\Seeder;

class ComputerConsumableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComputerConsumable::factory(10)->create();
    }
}

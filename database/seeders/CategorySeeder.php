<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
//        main categories
        Category::factory(10)->create();
//
//
//        Category::factory(50)->create(['category_id' => random_int(1,10)]);

    }
}

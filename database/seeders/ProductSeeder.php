<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {
        Product::factory(1000)->create()->each(function ($p){
            $p->categories()->attach([random_int(1,3),random_int(4,6),random_int(7,10)]);
        });
    }
}

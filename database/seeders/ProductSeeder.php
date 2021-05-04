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
            $p->categories()->attach([random_int(11,20),random_int(21,30),random_int(31,40),random_int(41,50),random_int(51,60)]);
        });
    }
}

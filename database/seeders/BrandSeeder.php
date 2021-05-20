<?php

namespace Database\Seeders;

use App\Models\Brand;
use Exception;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        Brand::factory(10)->create()->each(function ($b){
            $b->categories()->attach([random_int(11,20),random_int(21,30),random_int(31,40),random_int(41,50)]);
        });
    }
}

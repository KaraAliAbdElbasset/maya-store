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
            $b->categories()->attach([random_int(1,3),random_int(4,6),random_int(7,10)]);
        });
    }
}

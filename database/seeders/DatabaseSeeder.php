<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call(SettingSeeder::class);
        $this->call(AdminSeeder::class);
       // $this->call(CategorySeeder::class);
       // $this->call(BrandSeeder::class);
       // $this->call(FormSeeder::class);
       // $this->call(ComputerConsumableSeeder::class);
       // $this->call(ConsumableSeeder::class);
       // $this->call(FunctionalitySeeder::class);
       // $this->call(TypeSeeder::class);
       // $this->call(ProductSeeder::class);
    }
}

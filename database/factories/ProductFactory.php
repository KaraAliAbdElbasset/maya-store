<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        $price = random_int(1000,1500);
        return [
            'name' => $this->faker->words(6,true),
            'excerpt' => $this->faker->sentence,
            'description' => $this->faker->paragraph(5,true),
            'image' => asset('assets/test/'.random_int(1,15).'.jpg'),
            'price' => $price,
            'old_price' => $price + random_int(0,500),
            'popularity' => random_int(0,100),
            'is_active' => random_int(0,1),
            'qte' => random_int(0,100),
            'brand_id' => random_int(1,10),
            'type_id' => random_int(1,10),
            'form_id' => random_int(1,10),
            'functionality_id' => random_int(1,10),
            'consumable_id' => random_int(1,10),
            'computerConsumable_id' => random_int(1,10),
        ];
    }
}

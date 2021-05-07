<?php

namespace Database\Factories;

use App\Models\Functionality;
use Illuminate\Database\Eloquent\Factories\Factory;

class FunctionalityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Functionality::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(2),
            'category_id' => random_int(11,60)
        ];
    }
}

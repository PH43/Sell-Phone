<?php

namespace Database\Factories;

use App\Models\brands_categories;
use App\Models\products;
use Illuminate\Database\Eloquent\Factories\Factory;

class productsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

    {
        $id  = brands_categories::pluck('id');
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween($min = 500, $max = 9000),
            'quantity' => 10,
            'brands_categories_id' => $this->faker->randomElement($id),
           
        ];
    }
}

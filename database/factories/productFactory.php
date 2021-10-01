<?php

namespace Database\Factories;

use App\Models\brand_category;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class productFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id  = brand_category::pluck('id');
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween($min = 500, $max = 9000),
            'quantity' => 10,
            'description' => $this->faker->text($maxNbChars = 200) ,
            'brand_category_id' => $this->faker->randomElement($id),
           
        ];
    }
}

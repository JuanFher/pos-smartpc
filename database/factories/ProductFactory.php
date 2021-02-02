<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Tax;
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
     */
    public function definition()
    {
        return [
            'code' => $this->faker->word(3).$this->faker->numberBetween(100, 900),
            'name' => $this->faker->sentence,
            'stock' => $this->faker->numberBetween(100, 500),
            'image' => 'products/'.$this->faker->image('public/storage/products', 640, 480, null, false), 
            'buy_price' => $this->faker->numberBetween(100, 300),
            'sell_price' => $this->faker->numberBetween(400, 500),
            'status' => $this->faker->randomElement(['ACTIVE', 'INACTIVE']),
            'category_id' => Category::all()->random()->id,
            'provider_id' => Provider::all()->random()->id,
            'tax_id' => Tax::all()->random()->id,
           
        ];
    }
}

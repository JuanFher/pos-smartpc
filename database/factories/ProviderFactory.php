<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'ruc_number' => $this->faker->ean8,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'status' => $this->faker->randomElement(['ACTIVE', 'INACTIVE']),
            'logo' => 'providers/'.$this->faker->image('public/storage/providers', 150, 150, null, false), //producto1.jpg
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stadium>
 */
class StadiumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->randomNumber(2),
            'currency' => 'ر/س',
            'address' => $this->faker->address,
            'distance' => $this->faker->randomNumber(1) . ' كيلو متر',
            'is_favorite' => $this->faker->boolean,
            'image_url' => $this->faker->imageUrl(200, 200),
            'city_id' => $this->faker->randomDigit(),

        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Fiat;
use Illuminate\Database\Eloquent\Factories\Factory;

class FiatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fiat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'currency' => 'USD',
            'rate' => $this->faker->randomFloat(null, 0.1, 10)
        ];
    }
}

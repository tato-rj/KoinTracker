<?php

namespace Database\Factories;

use App\Models\Coin;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoinFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uid' => $this->faker->word,
            'short' => $this->faker->word,
            'name' => $this->faker->word,
            'current_price' => fiat($this->faker->randomFloat(null, 1)),
            'latest_market' => Coin::fake()->market(),
            'latest_1h_range' => Coin::fake()->range('hour'),
            'latest_24h_range' => Coin::fake()->range('day'),
            'latest_7d_range' => Coin::fake()->range('week'),
            'latest_30d_range' => Coin::fake()->range('month'),
            'latest_1y_range' => Coin::fake()->range('year'),
            'latest_all_range' => Coin::fake()->range('year')
        ];
    }
}

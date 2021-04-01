<?php

namespace Database\Factories;

use App\Models\{Transaction, Portfolio};
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'portfolio_id' => function() {
                return Portfolio::factory()->create()->id;
            },
            'coin' => $this->faker->word,
            'coin_amount' => $this->faker->randomFloat(),
            'price_per_coin' => $this->faker->randomFloat(),
            'currency' => $this->faker->word,
            'currency_amount' => $this->faker->randomFloat(),
            'fee' => $this->faker->randomDigitNotNull,
            'comments' => $this->faker->sentence,
            'type' => $this->faker->word,
            'transaction_date' => now()->subMonth()
        ];
    }
}

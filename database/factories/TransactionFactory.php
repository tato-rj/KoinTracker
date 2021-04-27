<?php

namespace Database\Factories;

use App\Models\{Transaction, Portfolio, Coin};
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
        $amount = $this->faker->randomFloat(null, 1, 10);
        $price = money($this->faker->randomFloat(null, 10, 20), appCurrencySymbol());
        $fee = money($this->faker->randomDigitNotNull, appCurrencySymbol());

        return [
            'portfolio_id' => function() {
                return Portfolio::factory()->create()->id;
            },
            'coin_id' => function() {
                return Coin::factory()->create()->id;
            },
            'coin_amount' => $amount,
            'price_per_coin' => $price,
            'currency_amount' => $price->multiply($amount)->add($fee),
            'fee' => $fee,
            'comments' => $this->faker->sentence,
            'type' => $this->faker->word,
            'transaction_date' => now()->subMonth()
        ];
    }
}

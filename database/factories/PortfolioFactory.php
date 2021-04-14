<?php

namespace Database\Factories;

use App\Models\{Portfolio, User};
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word;
        return [
            'slug' => str_slug($name),
            'user_id' => User::factory()->create()->id,
            'name' => $name
        ];
    }
}

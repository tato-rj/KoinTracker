<?php

namespace Database\Factories;

use App\Models\Badge;
use Illuminate\Database\Eloquent\Factories\Factory;

class BadgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Badge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'icon' => $faker->word,
            'color' => $faker->word,
            'name' => $faker->word,
            'description' => $faker->sentence,
            'points' => $faker->randomDigitNotNull
        ];
    }
}

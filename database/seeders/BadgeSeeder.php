<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Badge;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $badges = [
            ['icon' => 'baby', 'color' => 'yellow', 'name' => 'Start trading', 'description' => 'Earned when you add your first transaction', 'points' => 10],
            ['icon' => 'cookie', 'color' => 'yellow', 'name' => 'First gains', 'description' => 'Earned when you first reach 10% gains overall', 'points' => 11],
            ['icon' => 'star-half', 'color' => 'yellow', 'name' => 'One month member', 'description' => 'Earned when you have been with KoinTracker for 1 month.', 'points' => 12],
            ['icon' => 'star', 'color' => 'yellow', 'name' => 'One year member', 'description' => 'Earned when you have been with KoinTracker for 1 year', 'points' => 13],
            ['icon' => 'dice', 'color' => 'green', 'name' => 'Good hands', 'description' => 'Earn when you add at least 5 transactions.', 'points' => 50],
            ['icon' => 'heart', 'color' => 'green', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 51],
            ['icon' => 'gamepad', 'color' => 'green', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 52],
            ['icon' => 'coffee', 'color' => 'green', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 53],
            ['icon' => 'user-astronaut', 'color' => 'blue', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 100],
            ['icon' => 'dumbbell', 'color' => 'blue', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 101],
            ['icon' => 'fighter-jet', 'color' => 'blue', 'name' => 'Double stuff', 'description' => 'Earned when you reach 100% gains overall', 'points' => 102],
            ['icon' => 'chess-queen', 'color' => 'blue', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 103],
            ['icon' => 'jedi', 'color' => 'purple', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 150],
            ['icon' => 'medal', 'color' => 'purple', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 151],
            ['icon' => 'trophy', 'color' => 'purple', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 152],
            ['icon' => 'dragon', 'color' => 'purple', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 153]
        ];

        Badge::insert($badges);
    }
}

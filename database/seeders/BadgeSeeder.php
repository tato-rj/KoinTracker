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
            ['icon' => 'baby', 'level' => 'novice', 'name' => 'Start trading', 'description' => 'Earned when you add your first transaction', 'points' => 10],
            ['icon' => 'cookie', 'level' => 'novice', 'name' => 'First gains', 'description' => 'Earned when you first reach 10% gains overall', 'points' => 11],
            ['icon' => 'star-half', 'level' => 'novice', 'name' => 'One month member', 'description' => 'Earned when you have been with KoinTracker for 1 month.', 'points' => 12],
            ['icon' => 'star', 'level' => 'novice', 'name' => 'One year member', 'description' => 'Earned when you have been with KoinTracker for 1 year', 'points' => 13],
            ['icon' => 'dice', 'level' => 'beginner', 'name' => 'Good hands', 'description' => 'Earn when you add at least 5 transactions.', 'points' => 50],
            ['icon' => 'heart', 'level' => 'beginner', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 51],
            ['icon' => 'gamepad', 'level' => 'beginner', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 52],
            ['icon' => 'coffee', 'level' => 'beginner', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 53],
            ['icon' => 'user-astronaut', 'level' => 'advanced', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 100],
            ['icon' => 'dumbbell', 'level' => 'advanced', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 101],
            ['icon' => 'fighter-jet', 'level' => 'advanced', 'name' => 'Double stuff', 'description' => 'Earned when you reach 100% gains overall', 'points' => 102],
            ['icon' => 'chess-queen', 'level' => 'advanced', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 103],
            ['icon' => 'jedi', 'level' => 'expert', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 150],
            ['icon' => 'medal', 'level' => 'expert', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 151],
            ['icon' => 'trophy', 'level' => 'expert', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 152],
            ['icon' => 'dragon', 'level' => 'expert', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 153]
        ];

        Badge::insert($badges);
    }
}

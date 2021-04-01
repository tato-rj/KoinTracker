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
            ['icon' => 'baby', 'color' => 'yellow', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 10],
            ['icon' => 'cookie', 'color' => 'yellow', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 11],
            ['icon' => 'gamepad', 'color' => 'yellow', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 12],
            ['icon' => 'coffee', 'color' => 'yellow', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 13],
            ['icon' => 'dice', 'color' => 'green', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 50],
            ['icon' => 'heart', 'color' => 'green', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 51],
            ['icon' => 'star-half', 'color' => 'green', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 52],
            ['icon' => 'star', 'color' => 'green', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 53],
            ['icon' => 'user-astronaut', 'color' => 'blue', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 100],
            ['icon' => 'dumbbell', 'color' => 'blue', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 101],
            ['icon' => 'fighter-jet', 'color' => 'blue', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 102],
            ['icon' => 'chess-queen', 'color' => 'blue', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 103],
            ['icon' => 'jedi', 'color' => 'purple', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 150],
            ['icon' => 'medal', 'color' => 'purple', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 151],
            ['icon' => 'trophy', 'color' => 'purple', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 152],
            ['icon' => 'dragon', 'color' => 'purple', 'name' => 'Foo', 'description' => 'This is just a description', 'points' => 153]
        ];

        Badge::insert($badges);
    }
}

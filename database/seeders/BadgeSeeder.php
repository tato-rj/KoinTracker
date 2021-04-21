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
            ['icon' => 'baby', 'level' => 'novice', 'name' => 'Start trading', 'description' => 'Earned when you add your first transaction.', 'points' => 10],
            ['icon' => 'cookie', 'level' => 'novice', 'name' => 'First gains', 'description' => 'Earned when you first reach 10% gains in any transaction.', 'points' => 11],
            ['icon' => 'star-half', 'level' => 'novice', 'name' => 'One month member', 'description' => 'Earned when you have been with KoinTracker for 1 month.', 'points' => 12],
            ['icon' => 'star', 'level' => 'novice', 'name' => 'One year member', 'description' => 'Earned when you have been with KoinTracker for 1 year.', 'points' => 13],
            ['icon' => 'dice', 'level' => 'beginner', 'name' => 'Good hands', 'description' => 'Earn when you add at least 5 transactions.', 'points' => 50],
            ['icon' => 'heart', 'level' => 'beginner', 'name' => 'Love my coins', 'description' => 'Earn when you accumulate more than 3 different coins.', 'points' => 51],
            ['icon' => 'gamepad', 'level' => 'beginner', 'name' => 'It\'s in the game', 'description' => 'Earned when you first reach 50% gains in any transaction.', 'points' => 52],
            ['icon' => 'coffee', 'level' => 'beginner', 'name' => 'Routine', 'description' => 'Earn when you have transactions made in the past 3 consecutive months.', 'points' => 53],
            ['icon' => 'user-astronaut', 'level' => 'advanced', 'name' => 'To the moon', 'description' => 'Earn when you first reach 100% gains in any transaction.', 'points' => 100],
            ['icon' => 'fighter-jet', 'level' => 'advanced', 'name' => 'Flyin\' high', 'description' => 'Earned when you reach 200% gains in any transaction.', 'points' => 102],
            ['icon' => 'ethereum', 'level' => 'advanced', 'name' => 'Ethereum hodler', 'description' => 'Earn when you hold Ethereum coins for over 1 year.', 'points' => 101],
            ['icon' => 'bitcoin', 'level' => 'advanced', 'name' => 'Bitcoin enthusiast', 'description' => 'Earn when you own more than 1 bitcoin', 'points' => 103],
            ['icon' => 'jedi', 'level' => 'expert', 'name' => 'Hodler', 'description' => 'Earn when you hold any coin for over 1 year.', 'points' => 150],
            ['icon' => 'medal', 'level' => 'expert', 'name' => 'KoinTracker promoter', 'description' => 'Earned if you share a a link to KoinTracker on social media. Please email contact@kointracker.com with your post url to be awarded this badge.', 'points' => 151],
            ['icon' => 'trophy', 'level' => 'expert', 'name' => 'Master hodler', 'description' => 'Earn when you hold any coin for over 5 years.', 'points' => 152],
            ['icon' => 'dragon', 'level' => 'expert', 'name' => 'Top user', 'description' => 'Earn when you accumulate above 1,000% in overall gains.', 'points' => 153]
        ];

        Badge::insert($badges);
    }
}

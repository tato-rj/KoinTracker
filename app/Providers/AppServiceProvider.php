<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Coin;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \View::composer('*', function($view) {
            $badges = [
                ['icon' => 'baby', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'cookie', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'gamepad', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'coffee', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'dice', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'heart', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'star-half', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'star', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'user-astronaut', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'dumbbell', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'fighter-jet', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'chess-queen', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'jedi', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'medal', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'trophy', 'title' => 'Foo','description' => 'This is just a description'],
                ['icon' => 'dragon', 'title' => 'Foo','description' => 'This is just a description']
            ];

            $view->with(compact(['badges']));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::include('components.fontawesome', 'fa');
        \Blade::include('components.label');
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\{Coin, Badge};
use Illuminate\Support\Collection;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('coins', function ($app) {
            return \Cache::remember('app_coins', weeks(1), function() {
                return Coin::all();
            });
        });

        \View::composer('*', function($view) {
            $badges = Badge::all();
            $timeslots = timeslots('0:00', '24:00', '15');

            $view->with(compact(['badges', 'timeslots']));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        Collection::macro('unserialized', function() {
            return $this->map(function($item, $key) {
                try {
                    return unserialize($item)[0];
                } catch (\Exception $e) {
                    dd($item);
                }
                
            });
        });

        \Blade::include('components.fontawesome', 'fa');
        \Blade::include('components.flag');
        \Blade::include('components.caret');
        \Blade::include('components.label');
        \Blade::include('components.form.input');
        \Blade::include('components.form.select');
        \Blade::include('components.form.textarea');
        \Blade::include('components.form.datepicker');
        \Blade::include('components.form.checkbox');
        \Blade::include('components.form.radio');
        \Blade::include('components.alert');
        \Blade::include('components.title');
        \Blade::include('components.icon');
    }
}

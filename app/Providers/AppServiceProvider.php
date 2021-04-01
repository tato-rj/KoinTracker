<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{Coin, Badge};

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
            $badges = Badge::all();

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
        \Blade::include('components.form.input');
        \Blade::include('components.form.textarea');
        \Blade::include('components.form.datepicker');
        \Blade::include('components.form.checkbox');
        \Blade::include('components.alert');
    }
}

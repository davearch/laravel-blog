<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'layouts.base', 'App\Http\View\Composers\NavigationComposer'
        );
    }
    /**
     * Register the service provider.
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}
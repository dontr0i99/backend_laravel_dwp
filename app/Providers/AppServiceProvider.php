<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('global', function ($request) {
            return Limit::perMinute(10);
        });

        RateLimiter::for('user', function ($request) {
            if ($request->user()) {
                return Limit::perMinute(30)->by($request->user()->id);
            }

            return Limit::perMinute(10)->by($request->ip());
        });
    }
}

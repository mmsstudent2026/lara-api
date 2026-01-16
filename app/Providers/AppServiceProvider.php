<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
        if (!app()->environment('local')) {
            $this->app['request']->server->set('HTTPS', 'on');
        }


        // if (app()->environment('local')) {
        //     DB::listen(function ($query) {
        //         Log::info('SQL', [
        //             'query' => $query->sql,
        //             'bindings' => $query->bindings,
        //             'time_ms' => $query->time,
        //         ]);
        //     });
        // }
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Inertia::version(function () {
            return md5_file(public_path('mix-manifest.json'));
        });

        Inertia::share([
            // Synchronously
            'app' => [
                'name' => \Config::get('app.name')
            ],
            // Lazily
            'auth' => function () {
                return [
                    'user' => \Auth::user() ? [
                        'id' => \Auth::user()->id,
                        'first_name' => \Auth::user()->first_name,
                        'last_name' => \Auth::user()->last_name,
                    ] : null
                ];
            }
        ]);
    }
}

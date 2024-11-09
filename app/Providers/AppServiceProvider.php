<?php

namespace App\Providers;

use Illuminate\Support\Facades;
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
        Facades\DB::listen(function ($query) {

            $timestamp = date('d/m/Y H:i:s');
            $sql       = $query->sql;
            $binds     = implode(', ', $query->bindings);
            $newline   = PHP_EOL;

            Facades\File::append(
                storage_path('logs/query' . date('ymd') . '.log'),
                "--[$timestamp]--$newline--$sql--$newline--[$binds]--$newline"
            );
        });
    }
}

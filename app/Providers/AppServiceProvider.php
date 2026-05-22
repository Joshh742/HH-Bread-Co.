<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <-- Ini yang baru ditambahkan

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
        // Memaksa Laravel memuat aset (gambar/css) menggunakan HTTPS di server Railway
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }
}
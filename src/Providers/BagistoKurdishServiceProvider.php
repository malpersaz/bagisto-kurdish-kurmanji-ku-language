<?php

namespace Malpersaz\BagistoKurdish\Providers;

use Illuminate\Support\ServiceProvider;

class BagistoKurdishServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish language files
        $this->publishes([
            __DIR__ . '/../../lang' => lang_path('ku'),
        ], 'bagisto-kurdish-lang');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

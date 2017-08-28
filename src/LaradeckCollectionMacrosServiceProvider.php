<?php

namespace Ngtfkx\Laradeck\CollectionMacros;

use Illuminate\Support\ServiceProvider;

class LaradeckCollectionMacrosServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        foreach (glob(__DIR__ . '/Macros/*.php') as $filename) {
            require_once $filename;
        }
    }
}

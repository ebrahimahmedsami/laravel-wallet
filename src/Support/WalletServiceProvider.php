<?php

namespace Himasami\LaravelWallet\Support;

use Illuminate\Support\ServiceProvider;

class WalletServiceProvider extends ServiceProvider
{

    public function register()
    {
        // Register any bindings or dependencies here
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('migrations')
        ], 'laravel-wallet-table');

        $this->publishes([
            __DIR__.'/models/' => __DIR__.'../../../../../../app/Models'
        ], 'laravel-wallet-table');
    }

}

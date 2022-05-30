<?php

namespace Innowaysit\Finance;

use Illuminate\Support\ServiceProvider;

class FinanceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'finance');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/finance'),
        ]);
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ], 'finance-migrations');
    }
}

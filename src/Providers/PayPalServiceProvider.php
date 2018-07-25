<?php

namespace Milind\Paypal\Providers;

use Illuminate\Support\ServiceProvider;
use Milind\Paypal\Paypal;

class PayPalServiceProvider extends ServiceProvider {

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        $this->publishes([
            __DIR__ . '/../config/paypal.php' => config_path('paypal.php'),
        ],'config');
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
         $this->app->singleton('Paypal', function($app) {
            return new Paypal();
        });
        //
    }
    
    public function provides()
    {
        return array('Paypal');
    }

}

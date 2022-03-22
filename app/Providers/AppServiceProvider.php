<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billings\PaymentGateway;
use App\Billings\BankPaymentGateway;
use App\Billings\PaymentGatewayContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class, function($app){

            if(request()->has('bank')) {
                return new BankPaymentGateway('usd') ;
            }

            return new PaymentGateway('usd');

        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

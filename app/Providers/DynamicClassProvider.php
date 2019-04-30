<?php

    namespace App\Providers;
    use App\CurrencyListing;
    use Illuminate\Support\ServiceProvider;

    class DynamicClassProvider extends ServiceProvider
    {
        public function boot()
        {

            view()->composer('*', function($view){
                $view->with('currencies', CurrencyListing::all());
            });

        }


    }
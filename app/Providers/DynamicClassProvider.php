<?php

    namespace App\Providers;
    use App\CurrencyListing;
    use App\CryptoListing;
    use Illuminate\Support\ServiceProvider;

    class DynamicClassProvider extends ServiceProvider
    {
        public function boot()
        {

            view()->composer('*', function($view){
                $view
                    ->with('currencies', CurrencyListing::all());
            });
            
            view()->composer('*', function($view){
                $view->with('cryptos', CryptoListing::all());
            });
            

        }

            


    }

   
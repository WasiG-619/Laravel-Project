<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
    public function boot() 
    {
        \URL::forceScheme('https');
        Blade::directive('money', function ($amount) {
            return "<?php echo '£' . number_format($amount, 2); ?>"; //price format; concats the £ to the price when the value used with $money is called, to 2 decimal places
        });
    }
}
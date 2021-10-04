<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::resourceVerbs([
            'create' => 'creer',
            'edit' => 'editer',
        ]);

        //https://laravel.com/docs/8.x/blade#extending-blade
        Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('d/m/Y à H:i'); ?>";
        });

        Blade::directive('price', function ($expression) {
            return "<?php echo number_format($expression / 100, 2, ',', ' ') . '€'; ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        // Змінна, котра поширюєтья на всі шаблони:
        view()->share('LastWordId', App\test::getLastWordId()->id);
        view()->share('Rare', DB::table('ukr_rare')->count());
        view()->share('Slang', DB::table('ukr_slang')->count());

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

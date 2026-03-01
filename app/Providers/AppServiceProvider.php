<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
         $name='chaimae' ;
        $age=20;
        $skills=['aaaa','bbbbba','cccccccccc'];
        view()->share([
            'name'=>$name,
            'age'=>$age,
            'skills'=>$skills,
        ]);    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
    // public function boot() : void
    // {
    //     Password:defaults(function(){
    //         Password::min(8)
    //         ->letters()
    //         ->numbers()
    //         ->symbols()
    //         ->mixedCase()
    //         ->uncompromised();
    //     });
    // }
}
// request()->validate(
//     ['password' => ['required', 'string', Password::defaults()]]
// );

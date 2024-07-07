<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('isAdmin', function(User $user){
            return $user->role === 'admin';
        });
        Gate::define('isManager', function (User $user){
            return $user->role === 'manager';
        });
        Gate::define('singlePost', function (User $user, $postUserID){
            return $user->id === $postUserID;
        });

        // sob method ar age cal hobe
        // Gate::before(function (User $user){
        //     echo "age call hobe other method ar";
        // });

        // sob method ar por a cal hobe
        // Gate::after(function (User $user){
        //     echo "age call hobe other method ar";
        // });
        
    }
}

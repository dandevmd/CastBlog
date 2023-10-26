<?php

namespace App\Providers;

use App\Models\User;
use Blade;
use Gate;
use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        Gate::define('admin', fn(User $user) => $user->username === 'doe');
        Blade::if('admin', fn() => request()->user()?->can('admin'));
    }
}
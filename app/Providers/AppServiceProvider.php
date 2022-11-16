<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
        Gate::define('admin', function (User $user) {
            if ($user->status === 'admin') {
                return $user->id;
            }
        });

        Gate::define('dosen', function (User $user) {
            if ($user->status === 'pegawai') {
                return $user->id;
            }
        });

        Gate::define('admin_dosen', function (User $user) {
            if ($user->status === 'dosen' && $user->status === 'pegawai') {
                return $user->id;
            }
        });
    }
}

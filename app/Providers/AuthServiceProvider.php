<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

    Gate::define('admin', function ($user) {
        return $user->role === 'admin';
    });

    Gate::define('bsrm', function ($user) {
        return $user->role === 'bsrm';
    });

    Gate::define('project', function ($user) {
        return $user->role === 'project';
    });
    Gate::define('marsal', function ($user) {
        return $user->role === 'marsal';
    });
    Gate::define('oms', function ($user) {
        return $user->role === 'oms';
    });
    Gate::define('viewer', function ($user) {
        return $user->role === 'viewer';
    });
    }
}

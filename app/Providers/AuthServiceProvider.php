<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Assets
        Gate::define('asset_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('asset_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('asset_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('asset_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('asset_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Assets categories
        Gate::define('assets_category_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Assets locations
        Gate::define('assets_location_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Assets management
        Gate::define('assets_management_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Assets statuses
        Gate::define('assets_status_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Assets history
        Gate::define('assets_history_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

    }
}

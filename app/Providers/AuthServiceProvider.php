<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        Gate::before(function ($user) {
            if ($user->roles == 'admin') {
                return true;
            }
        });

        Gate::define('manager', function(User $user) {
            return $user->roles == 'manager';
        });

        Gate::define('edit_article', function(User $user, Article $article) {
            return ($user->roles == 'manager') || ($user->id == $article->author->id);
        });

        Gate::define('author', function(User $user) {
            return $user->roles == 'author';
        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Typically, users are redirected here after authentication.
     *
     * @return string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Get the path to the "home" route for the application.
     *
     * @return string
     */
    public static function redirectToHome()
    {
        $role = auth()->user()->roles->first()->name;

        echo ($role);

        if ($role === 'superadmin') {
            return '/superadmin';
        } elseif ($role === 'admin') {
            return '/admin';
        } elseif ($role === 'user') {
            return '/dashboard';
        }

        return self::HOME;
    }
}

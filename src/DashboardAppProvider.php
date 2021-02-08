<?php
namespace Lrvl\DashboardApp;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class DashboardAppProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        $this->loadViewsFrom(__DIR__.'/resources/views', 'dashboard');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([__DIR__.'/public' => public_path('vendor/lrvl/dashboard')], 'public');
        View::share('dashboardApp', [
            'name' => 'Dashboard',
            'slug' => 'dashboard',
            'icon' => [
                "type" => "url",
                "value" => "/vendor/lrvl/dashboard/icon.png"
            ]
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
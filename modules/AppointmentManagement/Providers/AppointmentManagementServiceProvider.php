<?php

namespace Modules\AppointmentManagement\Providers;

use Illuminate\Support\ServiceProvider;

class AppointmentManagementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../Shell/Database/Migrations');
        $this->mergeConfigFrom(__DIR__.'/../Config/config.php', 'appointment-management');
        $this->app->register(RouteServiceProvider::class);

        // bind to container
        // $this->app->bind(ExampleRepositoryInterface::class, ExampleRepository::class);
    }
}

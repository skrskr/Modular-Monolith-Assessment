<?php

namespace Modules\AppointmentBooking\Providers;

use Illuminate\Support\ServiceProvider;

class AppointmentBookingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__.'/../Config/config.php', 'appointment-booking');
        $this->app->register(RouteServiceProvider::class);

        // bind to container
        // $this->app->bind(ExampleRepositoryInterface::class, ExampleRepository::class);
    }
}

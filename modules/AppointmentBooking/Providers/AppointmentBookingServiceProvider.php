<?php

namespace Modules\AppointmentBooking\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\AppointmentBooking\Infrastructure\Repositories\AppointmentRepository;
use Modules\AppointmentBooking\Shared\Repositories\AppointmentRepositoryInterface;

class AppointmentBookingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../Infrastructure/Database/Migrations');
        $this->mergeConfigFrom(__DIR__.'/../Config/config.php', 'appointment-booking');
        $this->app->register(RouteServiceProvider::class);

        // bind to container
        $this->app->bind(AppointmentRepositoryInterface::class, AppointmentRepository::class);
    }
}

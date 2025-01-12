<?php

namespace Modules\AppointmentConfirmation\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Modules\AppointmentBooking\Application\Events\AppointmentCreated;
use Modules\AppointmentConfirmation\Listeners\SendNotificationListener;

class AppointmentConfirmationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'appointment-booking');
        $this->app->register(RouteServiceProvider::class);

        Event::listen(
            AppointmentCreated::class,
            [SendNotificationListener::class, 'handle']
        );

        // bind to container
        // $this->app->bind(ExampleRepositoryInterface::class, ExampleRepository::class);
    }
}

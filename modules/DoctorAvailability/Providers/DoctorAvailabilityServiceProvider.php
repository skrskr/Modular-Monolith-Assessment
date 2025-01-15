<?php

namespace Modules\DoctorAvailability\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\DoctorAvailability\Repositories\SlotRepository;
use Modules\DoctorAvailability\Shared\Repositories\SlotRepositoryInterface;
use Illuminate\Support\Facades\Event;
use Modules\AppointmentBooking\Application\Events\AppointmentCreated;
use Modules\DoctorAvailability\Listeners\AppointmentCreatedListener;

class DoctorAvailabilityServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__.'/../Config/config.php', 'doctor-availability');
        $this->app->register(RouteServiceProvider::class);

        Event::listen(
            AppointmentCreated::class,
            [AppointmentCreatedListener::class, 'handle']
        );

        // bind to container
        $this->app->bind(SlotRepositoryInterface::class, SlotRepository::class);
    }
}

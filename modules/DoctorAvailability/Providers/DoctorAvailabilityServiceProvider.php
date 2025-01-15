<?php

namespace Modules\DoctorAvailability\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Modules\AppointmentBooking\Application\Events\AppointmentCreated;
use Modules\DoctorAvailability\Listeners\BookSlot;
use Modules\DoctorAvailability\Listeners\ReserveSlot;
use Modules\DoctorAvailability\Repositories\SlotRepository;
use Modules\DoctorAvailability\Shared\Repositories\SlotRepositoryInterface;

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

        // bind to container
        $this->app->bind(SlotRepositoryInterface::class, SlotRepository::class);

        Event::listen(
            AppointmentCreated::class,
            [ReserveSlot::class, 'handle']
        );
    }
}

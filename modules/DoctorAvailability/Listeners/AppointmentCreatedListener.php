<?php

namespace Modules\DoctorAvailability\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Modules\AppointmentBooking\Application\Events\AppointmentCreated;
use Modules\AppointmentConfirmation\Services\NotificationService;
use Modules\DoctorAvailability\Services\SlotService;

class AppointmentCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct(private SlotService $slotService)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AppointmentCreated $event): void
    {
        $this->slotService->updateSlotStatus($event->appointment->getSlotId(), 'reserved');
    }
}

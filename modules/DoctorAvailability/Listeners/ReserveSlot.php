<?php

namespace Modules\DoctorAvailability\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Modules\AppointmentBooking\Application\Events\AppointmentCreated;
use Modules\DoctorAvailability\Services\SlotService;

class ReserveSlot
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
        // Reserve the slot
        $this->slotService->reservedSlot($event->appointment->getSlotId());
    }
}

<?php

namespace Modules\AppointmentConfirmation\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Modules\AppointmentBooking\Application\Events\AppointmentCreated;
use Modules\AppointmentConfirmation\Services\NotificationService;

class SendNotificationListener
{
    /**
     * Create the event listener.
     */
    public function __construct(private NotificationService $notificationService)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AppointmentCreated $event): void
    {
        // Notification for the patient
        $this->notificationService->sendNotification([
            'recipient_name' => $event->appointment->getPatientName(),
            'recipient_type' => 'Patient',
            'message_body' => sprintf(
                "your appointment with %s is confirmed for %s.",
                $event->appointment->getDoctorName(),
                $event->appointment->getSlotTime()
            )
        ]);

        // Notification for the doctor
        $this->notificationService->sendNotification([
            'recipient_name' => $event->appointment->getDoctorName(),
            'recipient_type' => 'Doctor',
            'message_body' => sprintf(
                "you have a new appointment with %s scheduled for %s.",
                $event->appointment->getPatientName(),
                $event->appointment->getSlotTime()
            )
        ]);
    }
}

<?php

namespace Modules\AppointmentConfirmation\Services;

use Illuminate\Support\Facades\Log;

class NotificationService
{
    /**
     * Sends a notification to a recipient
     *
     * @param array $details
     * @return void
     */
    public function sendNotification(array $details): void
    {
        $message = sprintf(
            "Dear %s, %s",
            $details['recipient_name'],
            $details['message_body']
        );

        Log::info($details['recipient_type'] . " Notification: " . $message);
    }
}

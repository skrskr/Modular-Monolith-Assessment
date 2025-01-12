<?php

namespace Modules\AppointmentBooking\Application\DTOs;

class AppointmentDTO
{
    public function __construct(
        public string $slotId,
        public string $patientId,
        public string $patientName,
    ) {}
}

<?php

namespace Modules\AppointmentBooking\Domain\Repositories;

use Modules\AppointmentBooking\Domain\Entities\Appointment;

interface AppointmentRepositoryInterface
{
    public function create(Appointment $appointment): Appointment;

    public function findWithDoctor(string $appointmentId): ?Appointment;
}

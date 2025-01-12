<?php

namespace Modules\AppointmentManagement\Shared\Repositories;

use Illuminate\Support\Collection;
use Modules\AppointmentBooking\Domain\Entities\Appointment;

interface AppointmentRepositoryInterface
{
    public function create(Appointment $appointment): Appointment;

    public function findWithDoctor(string $appointmentId): ?Appointment;

    public function getUpcomingAppointments(): Collection;

    public function completeAppointment(string $appointmentId): void;

    public function cancelAppointment(string $appointmentId): void;
}

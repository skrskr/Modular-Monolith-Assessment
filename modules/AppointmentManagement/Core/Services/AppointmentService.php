<?php

namespace Modules\AppointmentManagement\Core\Services;

use Illuminate\Support\Collection;
use Modules\AppointmentBooking\Shared\Repositories\AppointmentRepositoryInterface;

class AppointmentService
{
    public function __construct(
        private AppointmentRepositoryInterface $appointmentRepository,
    ) {}

    public function getUpcomingAppointments(): Collection
    {
        return $this->appointmentRepository->getUpcomingAppointments();
    }

    public function completeAppointment(string $appointmentId): void
    {
        $this->appointmentRepository->completeAppointment($appointmentId);
    }

    public function cancelAppointment(string $appointmentId): void
    {
        $this->appointmentRepository->cancelAppointment($appointmentId);
    }
}

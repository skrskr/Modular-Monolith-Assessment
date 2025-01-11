<?php

namespace Modules\AppointmentBooking\Application\UseCases;

use Modules\AppointmentBooking\Application\DTOs\AppointmentDTO;
use Modules\AppointmentBooking\Domain\Entities\Appointment;
use Modules\AppointmentBooking\Domain\Repositories\AppointmentRepositoryInterface;
use Carbon\Carbon;

class BookAppointmentUseCase
{
    public function __construct(
        private AppointmentRepositoryInterface $appointmentRepository,
    ) {}

    public function execute(AppointmentDTO $appointmentDTO): Appointment
    {
        $appointment = new Appointment(
            null,
            $appointmentDTO->slotId,
            $appointmentDTO->patientId,
            $appointmentDTO->patientName,
            Carbon::now()->toDateTimeString(),
        );

        return $this->appointmentRepository->create($appointment);
    }
}

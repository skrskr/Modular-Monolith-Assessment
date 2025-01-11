<?php

namespace Modules\AppointmentBooking\Infrastructure\Repositories;

use Modules\AppointmentBooking\Domain\Entities\Appointment;
use Modules\AppointmentBooking\Domain\Repositories\AppointmentRepositoryInterface;
use Modules\AppointmentBooking\Infrastructure\Models\Appointment as AppointmentModel;

class AppointmentRepository implements AppointmentRepositoryInterface
{
    public function create(Appointment $appointment): Appointment
    {
        $appointmentModel = AppointmentModel::create($appointment->toArray());
        $appointment->setId($appointmentModel->id);
        return $appointment;
    }
}

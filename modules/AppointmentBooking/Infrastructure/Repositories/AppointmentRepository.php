<?php

namespace Modules\AppointmentBooking\Infrastructure\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Modules\AppointmentBooking\Domain\Entities\Appointment;
use Modules\AppointmentBooking\Infrastructure\Models\Appointment as AppointmentModel;
use Modules\AppointmentManagement\Shared\Repositories\AppointmentRepositoryInterface;

class AppointmentRepository implements AppointmentRepositoryInterface
{
    public function create(Appointment $appointment): Appointment
    {
        $appointmentModel = AppointmentModel::create($appointment->toArray());
        $appointment->setId($appointmentModel->id);
        return $appointment;
    }

    public function findWithDoctor(string $appointmentId): ?Appointment
    {
        $result = DB::table('appointments')
            ->join('slots', 'appointments.slot_id', '=', 'slots.id')
            ->where('appointments.id', $appointmentId)
            ->select('appointments.*', 'slots.doctor_id', 'slots.doctor_name', 'slot.time')
            ->first();

        if (!$result) {
            return null;
        }

        return new Appointment(
            id: $result->id,
            slotId: $result->slot_id,
            patientId: $result->patient_id,
            patientName: $result->patient_name ?? 'Unknown',
            reservedAt: $result->reserved_at,
            slotTime: $result->time,
            doctorId: $result->doctor_id,
            doctorName: $result->doctor_name
        );
    }

    public function getUpcomingAppointments(): Collection
    {
        return AppointmentModel::get();
    }

    public function completeAppointment(string $appointmentId): void
    {
        AppointmentModel::where('id', $appointmentId)->update(['status' => 'completed']);
    }

    public function cancelAppointment(string $appointmentId): void
    {
        AppointmentModel::where('id', $appointmentId)->update(['status' => 'cancelled']);
    }
}

<?php

namespace Modules\AppointmentManagement\Shell\Http\Controllers;

use Modules\AppointmentManagement\Core\Services\AppointmentService;
use Modules\AppointmentManagement\Shell\Http\Requests\GetUpcomingAppointmentsRequest;
use Modules\AppointmentManagement\Shell\Http\Requests\UpdateAppointmentRequest;

class AppointmentController extends Controller
{

    public function __construct(private AppointmentService $appointmentService)
    {}

    public function getUpcomingAppointments(GetUpcomingAppointmentsRequest $request)
    {
        $appointments = $this->appointmentService->getUpcomingAppointments();
        return response()->json(['appointments' => $appointments]);
    }

    public function completeAppointment(UpdateAppointmentRequest $request)
    {
        $this->appointmentService->completeAppointment($request->validated('appointment'));
        return response()->json(['message' => 'Appointment completed successfully']);
    }

    public function cancelAppointment(UpdateAppointmentRequest $request)
    {
        $this->appointmentService->cancelAppointment($request->validated('appointment'));
        return response()->json(['message' => 'Appointment cancelled successfully']);
    }
}

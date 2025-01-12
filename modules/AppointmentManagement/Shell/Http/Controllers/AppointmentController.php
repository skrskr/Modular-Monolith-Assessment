<?php

namespace Modules\AppointmentManagement\Shell\Http\Controllers;

use Modules\AppointmentBooking\Application\UseCases\BookAppointmentUseCase;
use Modules\AppointmentBooking\Api\Http\Requests\BookAppointmentRequest;
use Modules\AppointmentBooking\Application\DTOs\AppointmentDTO;
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
    }

    public function completeAppointment(UpdateAppointmentRequest $request)
    {
        $this->appointmentService->completeAppointment($request->validated('appointment'));
    }

    public function cancelAppointment(UpdateAppointmentRequest $request)
    {
        $this->appointmentService->cancelAppointment($request->validated('appointment'));
    }
}

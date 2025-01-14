<?php

namespace Modules\AppointmentBooking\Api\Http\Controllers;

use Modules\AppointmentBooking\Application\UseCases\BookAppointmentUseCase;
use Modules\AppointmentBooking\Api\Http\Requests\BookAppointmentRequest;
use Modules\AppointmentBooking\Application\DTOs\AppointmentDTO;

class AppointmentController extends Controller
{

    public function __construct(private BookAppointmentUseCase $bookAppointmentUseCase)
    {}

    /**
     * Create a new appointment.
     *
     * @param \Modules\AppointmentBooking\Api\Http\Requests\BookAppointmentRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(BookAppointmentRequest $request)
    {
        $appointmentDTO = new AppointmentDTO(
            $request->validated('slot_id'),
            $request->validated('patient_id'),
            $request->validated('patient_name'),
        );

        $appointment = $this->bookAppointmentUseCase->execute($appointmentDTO);

        return response()->json($appointment->toArray());
    }
}

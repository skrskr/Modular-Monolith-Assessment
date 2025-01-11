<?php

namespace Modules\AppointmentBooking\Api\Http\Controllers;

use Modules\AppointmentBooking\Application\UseCases\BookAppointmentUseCase;
use Modules\AppointmentBooking\Api\Http\Requests\BookAppointmentRequest;
use Modules\AppointmentBooking\Application\DTOs\AppointmentDTO;

class AppointmentController extends Controller
{

    public function __construct(private BookAppointmentUseCase $bookAppointmentUseCase)
    {}

    public function create(BookAppointmentRequest $request)
    {
        $appointmentDTO = new AppointmentDTO(
            $request->validated('slotId'),
            $request->validated('patientId'),
            $request->validated('patientName'),
        );

        $appointment = $this->bookAppointmentUseCase->execute($appointmentDTO);

        return response()->json($appointment->toArray());
    }
}

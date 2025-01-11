<?php

namespace Modules\AppointmentBooking\Api\Http\Controllers;

use Modules\AppointmentBooking\Application\UseCases\ListAvailableSlotsUseCase;

class SlotController extends Controller
{

    public function __construct(private ListAvailableSlotsUseCase $listAvailableSlotsUseCase)
    {}

    /**
     * Get a list of available slots for a doctor.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function listAvailableSlots()
    {
        $slots = $this->listAvailableSlotsUseCase->execute();

        return response()->json($slots);
    }
}

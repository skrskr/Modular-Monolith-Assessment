<?php

namespace Modules\DoctorAvailability\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\DoctorAvailability\Http\Requests\CreateSlotRequest;
use Modules\DoctorAvailability\Services\SlotService;

class SlotController extends Controller
{

    public function __construct(protected SlotService $slotService)
    {}

    /**
     * Get a list of available slots for a doctor.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function listAvailableSlots()
    {
        $slots = $this->slotService->listAvailableSlots();

        return response()->json($slots);
    }

    public function create(CreateSlotRequest $request)
    {
        $slot = $this->slotService->createSlot($request->validated());

        return response()->json($slot, 201);
    }
}

<?php

namespace Modules\DoctorAvailability\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\DoctorAvailability\Services\SlotService;
use Modules\DoctorAvailability\Http\Requests\CreateSlotRequest;

class SlotController extends Controller
{
    protected $slotService;

    public function __construct(SlotService $slotService)
    {
        $this->slotService = $slotService;
    }

    /**
     * Get a list of available slots for a doctor.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function listAvialableSlots()
    {
        $slots = $this->slotService->listAvialableSlots();
        return response()->json($slots);
    }

    public function store(CreateSlotRequest $request)
    {
        $slot = $this->slotService->createSlot($request->validated());
        return response()->json($slot, 201);
    }
}

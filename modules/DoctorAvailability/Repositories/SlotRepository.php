<?php

namespace Modules\DoctorAvailability\Repositories;

use Modules\DoctorAvailability\Models\Slot;
use Modules\DoctorAvailability\Shared\Repositories\SlotRepositoryInterface;

class SlotRepository implements SlotRepositoryInterface
{
    public function listAvailableSlots()
    {
        return Slot::where('status', 'free')
            ->where('time', '>', now())
            ->orderBy('time')
            ->get();
    }

    public function listAllSlots()
    {
        return Slot::orderBy('time')
            ->get();
    }

    public function createSlot(array $data)
    {
        return Slot::create($data);
    }

    public function updateSlotStatus(string $slotId, string $status)
    {
        return Slot::where('id', $slotId)->update(['status' => $status]);
    }
}

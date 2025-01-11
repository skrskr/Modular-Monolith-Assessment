<?php

namespace Modules\DoctorAvailability\Repositories;

use Modules\DoctorAvailability\Models\Slot;

class SlotRepository
{
    public function listAvialableSlots()
    {
        return Slot::where('status', 'free')
            ->where('time', '>', now())
            ->orderBy('time')
            ->get();
    }

    public function createSlot(array $data)
    {
        return Slot::create($data);
    }
}

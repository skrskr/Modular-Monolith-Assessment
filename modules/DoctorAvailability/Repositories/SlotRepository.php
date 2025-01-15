<?php

namespace Modules\DoctorAvailability\Repositories;

use Modules\DoctorAvailability\Models\Slot;
use Modules\DoctorAvailability\Shared\Repositories\SlotRepositoryInterface;

class SlotRepository implements SlotRepositoryInterface
{
    /**
     * List all available slots.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function listAvailableSlots()
    {
        return Slot::where('status', 'free')
            ->where('time', '>', now())
            ->orderBy('time')
            ->get();
    }

    /**
     * List all slots.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function listAllSlots()
    {
        return Slot::orderBy('time')
            ->get();
    }

    /**
     * Create a new slot.
     *
     * @param array $data
     * @return \Modules\DoctorAvailability\Models\Slot
     */
    public function createSlot(array $data)
    {
        return Slot::create($data);
    }

    /**
     * Reserve a slot by its ID.
     *
     * @param int $slotId
     * @return \Modules\DoctorAvailability\Models\Slot
     */
    public function reserveSlot($slotId)
    {
        return Slot::where('id', $slotId)
            ->update(['status' => 'reserved']);
    }
}

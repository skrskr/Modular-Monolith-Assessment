<?php

namespace Modules\DoctorAvailability\Shared\Repositories;

interface SlotRepositoryInterface
{
    public function listAllSlots();

    public function createSlot(array $data);

    public function listAvailableSlots();

    public function updateSlotStatus(string $slotId, string $status);
}

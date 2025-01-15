<?php

namespace Modules\DoctorAvailability\Services;

use Modules\DoctorAvailability\Shared\Repositories\SlotRepositoryInterface;

class SlotService
{

    public function __construct(protected SlotRepositoryInterface $slotRepository)
    {}

    public function listAvailableSlots()
    {
        return $this->slotRepository->listAvailableSlots();
    }

    public function createSlot(array $data)
    {
        return $this->slotRepository->createSlot($data);
    }

    public function updateSlotStatus(string $slotId, string $status)
    {
        return $this->slotRepository->updateSlotStatus($slotId, $status);
    }
}

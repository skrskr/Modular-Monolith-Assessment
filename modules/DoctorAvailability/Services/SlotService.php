<?php

namespace Modules\DoctorAvailability\Services;

use Modules\DoctorAvailability\Repositories\SlotRepository;

class SlotService
{
    protected $slotRepository;

    public function __construct(SlotRepository $slotRepository)
    {
        $this->slotRepository = $slotRepository;
    }

    public function listAvialableSlots()
    {
        return $this->slotRepository->listAvialableSlots();
    }

    public function createSlot(array $data)
    {
        return $this->slotRepository->createSlot($data);
    }
}

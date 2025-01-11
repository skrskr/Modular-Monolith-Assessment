<?php

namespace Modules\DoctorAvailability\Shared\Repositories;

interface SlotRepositoryInterface
{
    public function listAllSlots();

    public function createSlot(array $data);

    public function listAvailableSlots();

}

<?php

namespace Modules\AppointmentBooking\Application\UseCases;

use Illuminate\Database\Eloquent\Collection;
use Modules\DoctorAvailability\Shared\Repositories\SlotRepositoryInterface;

class ListAvailableSlotsUseCase
{
    public function __construct(
        private SlotRepositoryInterface $slotRepository,
    ) {}

    public function execute(): Collection
    {
        return $this->slotRepository->listAvailableSlots();
    }
}

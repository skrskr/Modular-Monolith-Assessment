<?php

namespace Modules\AppointmentBooking\Application\UseCases;

use Modules\DoctorAvailability\Shared\Repositories\SlotRepositoryInterface;

class CheckSlotAvailabilityUseCase
{
    public function __construct(
        private SlotRepositoryInterface $slotRepository,
    ) {}

    public function execute(string $slotId): bool
    {
        return $this->slotRepository->checkSlotAvailability($slotId) != null;
    }


}

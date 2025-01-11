<?php

namespace Modules\AppointmentBooking\Domain\Entities;

class Appointment
{
    public function __construct(
        private ?string $id = null,
        private string $slotId,
        private string $patientId,
        private string $patientName,
        private string $reservedAt,
    ) {}

    public function getId(): string
    {
        return $this->id;
    }

    public function getSlotId(): string
    {
        return $this->slotId;
    }

    public function getPatientId(): string
    {
        return $this->patientId;
    }

    public function getPatientName(): string
    {
        return $this->patientName;
    }

    public function getReservedAt(): string
    {
        return $this->reservedAt;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setSlotId(string $slotId): void
    {
        $this->slotId = $slotId;
    }

    public function setPatientId(string $patientId): void
    {
        $this->patientId = $patientId;
    }

    public function setPatientName(string $patientName): void
    {
        $this->patientName = $patientName;
    }

    public function setReservedAt(string $reservedAt): void
    {
        $this->reservedAt = $reservedAt;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'slot_id' => $this->slotId,
            'patient_id' => $this->patientId,
            'patient_name' => $this->patientName,
            'reserved_at' => $this->reservedAt,
        ];
    }
}

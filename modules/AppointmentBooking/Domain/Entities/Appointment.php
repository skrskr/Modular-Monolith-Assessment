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
        private ?string $slotTime = null,
        private ?string $doctorId = null,
        private ?string $doctorName = null,
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

    public function getSlotTime(): ?string
    {
        return $this->slotTime;
    }

    public function getDoctorId(): ?string
    {
        return $this->doctorId;
    }

    public function getDoctorName(): ?string
    {
        return $this->doctorName;
    }

    public function setId(string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function setSlotId(string $slotId): static
    {
        $this->slotId = $slotId;
        return $this;
    }

    public function setPatientId(string $patientId): static
    {
        $this->patientId = $patientId;
        return $this;
    }

    public function setPatientName(string $patientName): static
    {
        $this->patientName = $patientName;
        return $this;
    }

    public function setReservedAt(string $reservedAt): static
    {
        $this->reservedAt = $reservedAt;
        return $this;
    }

    public function setSlotTime(?string $slotTime): static
    {
        $this->slotTime = $slotTime;
        return $this;
    }

    public function setDoctorId(string $doctorId): static
    {
        $this->doctorId = $doctorId;
        return $this;
    }

    public function setDoctorName(string $doctorName): static
    {
        $this->doctorName = $doctorName;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'slot_id' => $this->slotId,
            'patient_id' => $this->patientId,
            'patient_name' => $this->patientName,
            'reserved_at' => $this->reservedAt,
            'doctor_id' => $this->doctorId,
            'doctor_name' => $this->doctorName,
        ];
    }
}

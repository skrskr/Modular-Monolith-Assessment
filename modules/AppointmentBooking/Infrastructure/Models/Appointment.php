<?php

namespace Modules\AppointmentBooking\Infrastructure\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasUuids;

    protected $fillable = [
        'slot_id',
        'patient_id',
        'patient_name',
        'reserved_at',
    ];
}

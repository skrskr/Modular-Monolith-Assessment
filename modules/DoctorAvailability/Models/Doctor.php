<?php

namespace Modules\DoctorAvailability\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Doctor extends User
{
    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
}

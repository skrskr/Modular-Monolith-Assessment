<?php

namespace Modules\DoctorAvailability\Models;

use App\Models\User;

class Doctor extends User
{
    protected $table = 'users';

    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
}

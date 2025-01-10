<?php

use Modules\DoctorAvailability\Providers\DoctorAvailabilityServiceProvider;
use Modules\AppointmentBooking\Providers\AppointmentBookingServiceProvider;
return [
    App\Providers\AppServiceProvider::class,
    DoctorAvailabilityServiceProvider::class,
    AppointmentBookingServiceProvider::class,
];

<?php

use Modules\DoctorAvailability\Providers\DoctorAvailabilityServiceProvider;
use Modules\AppointmentBooking\Providers\AppointmentBookingServiceProvider;
use Modules\AppointmentConfirmation\Providers\AppointmentConfirmationServiceProvider;

return [
    App\Providers\AppServiceProvider::class,
    DoctorAvailabilityServiceProvider::class,
    AppointmentBookingServiceProvider::class,
    AppointmentConfirmationServiceProvider::class,
];

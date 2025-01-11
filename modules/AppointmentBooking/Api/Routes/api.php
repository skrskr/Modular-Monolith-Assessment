<?php

use Illuminate\Support\Facades\Route;
use Modules\AppointmentBooking\Api\Http\Controllers\AppointmentController;

Route::post('book-appointment', [AppointmentController::class, 'bookAppointment']);

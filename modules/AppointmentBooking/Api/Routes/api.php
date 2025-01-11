<?php

use Illuminate\Support\Facades\Route;
use Modules\AppointmentBooking\Api\Http\Controllers\AppointmentController;


Route::prefix('appointment-booking')->group(function () {
    Route::prefix('appointments')->group(function () {
        Route::post('/', [AppointmentController::class, 'create'])->name('appointment-booking-create-appointment');
    });
});

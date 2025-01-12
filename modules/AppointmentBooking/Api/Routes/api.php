<?php

use Illuminate\Support\Facades\Route;
use Modules\AppointmentBooking\Api\Http\Controllers\AppointmentController;
use Modules\AppointmentBooking\Api\Http\Controllers\SlotController;

Route::prefix('appointment-booking')->group(function () {
    Route::prefix('appointments')->group(function () {
        Route::post('/', [AppointmentController::class, 'create'])->name('appointment-booking-create-appointment');
    });

    Route::prefix('slots')->group(function () {
        Route::get('/', [SlotController::class, 'listAvailableSlots'])->name('appointment-booking-list-available-slots');
    });
});

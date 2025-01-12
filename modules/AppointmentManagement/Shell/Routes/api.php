<?php

use Illuminate\Support\Facades\Route;
use Modules\AppointmentManagement\Shell\Http\Controllers\AppointmentController;

Route::prefix('appointment-management')->group(function () {

    Route::prefix('appointments')->group(function () {
        Route::get('/upcoming', [AppointmentController::class, 'getUpcomingAppointments'])->name('appointment-management.appointments.upcoming');

        Route::prefix('{appointment}')->group(function () {
            Route::post('/complete', [AppointmentController::class, 'completeAppointment'])->name('appointment-management.appointments.complete');
            Route::post('/cancel', [AppointmentController::class, 'cancelAppointment'])->name('appointment-management.appointments.cancel');
        });
    });

});

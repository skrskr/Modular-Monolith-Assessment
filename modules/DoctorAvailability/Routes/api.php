<?php

use Illuminate\Support\Facades\Route;
use Modules\DoctorAvailability\Http\Controllers\SlotController;

Route::prefix('/doctor-availability', function () {
    Route::prefix('slots')->group(function () {
        Route::post('/', [SlotController::class, 'create'])->name('doctor-availability-create-slot');
        Route::get('/available', [SlotController::class, 'listAvailableSlots'])->name('doctor-availability-list-available-slots');
    });
});

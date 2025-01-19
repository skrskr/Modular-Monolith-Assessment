<?php

use Illuminate\Support\Facades\Route;
use Modules\DoctorAvailability\Http\Controllers\SlotController;

Route::prefix('doctor-availability')->group(function () {
    Route::prefix('slots')->group(function () {
        Route::post('/', [SlotController::class, 'create'])->name('doctor-availability-create-slot');
        Route::get('/', [SlotController::class, 'listAllSlots'])->name('doctor-availability-list-all-slots');
    });
});

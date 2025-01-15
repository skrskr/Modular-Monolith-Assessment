<?php

namespace Modules\DoctorAvailability\Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\DoctorAvailability\Models\Slot;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slot::create([
            'doctor_id' => '9df7fc22-a988-4084-9005-9e562e097829',
            'time' => Carbon::now()->toDateTimeString(),
            'status' => 'free',
            'cost' => 100
        ]);
    }
}

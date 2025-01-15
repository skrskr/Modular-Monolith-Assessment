<?php

namespace Modules\AppointmentBooking\Infrastructure\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\AppointmentBooking\Infrastructure\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            'id' => '9df7fc22-a988-4084-9005-9e562e097829',
            'name' => 'Adam Smith',
            'email' => 'adam.smith@example.com',
            'password' => Hash::make('password'),
            'type' => 'patient'
        ]);
    }
}

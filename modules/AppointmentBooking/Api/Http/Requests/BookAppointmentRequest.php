<?php

namespace Modules\AppointmentBooking\Api\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'slotId' => 'required|string|exists:slots,id',
            'patientId' => 'required|string|exists:users,id',
            'patientName' => 'required|string',
        ];
    }
}

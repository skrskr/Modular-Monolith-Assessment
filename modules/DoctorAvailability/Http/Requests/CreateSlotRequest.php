<?php

namespace Modules\DoctorAvailability\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSlotRequest extends FormRequest
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
            'time' => 'required|date|after:now',
            'doctor_id' => 'required|uuid',
            'cost' => 'required|numeric|min:0',
        ];
    }
}

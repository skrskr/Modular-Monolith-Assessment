<?php

namespace Modules\AppointmentManagement\Shell\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAppointmentRequest extends FormRequest
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
            'appointment' => 'required|string|exists:appointments,id',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'appointment' => $this->route('appointment'),
        ]);
    }
}

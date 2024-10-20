<?php
namespace DTApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust this based on your authorization needs
    }

    public function rules()
    {
        return [
            'from_language_id' => 'required|integer',
            'due_date' => 'required_if:immediate,no|date',
            'due_time' => 'required_if:immediate,no|string',
            'customer_phone_type' => 'nullable|boolean',
            'customer_physical_type' => 'nullable|boolean',
            'duration' => 'required|string',
            // Add other validation rules as needed
        ];
    }

    public function messages()
    {
        return [
            'from_language_id.required' => 'Du måste fylla in alla fält',
            'due_date.required_if' => 'Du måste fylla in alla fält',
            'due_time.required_if' => 'Du måste fylla in alla fält',
            'duration.required' => 'Du måste fylla in alla fält',
            // Add other custom messages as needed
        ];
    }
}

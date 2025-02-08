<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriptionRequest extends FormRequest
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
    public function rules()
    {
        return [
            'label' => 'string|max:255',
            'description' => 'string|max:255',
            'rising' => 'required|integer',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'frequency' => 'string|max:255',

        ];
    }
}

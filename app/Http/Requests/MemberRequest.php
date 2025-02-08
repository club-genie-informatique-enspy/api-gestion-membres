<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'name' => 'string|max:255',
            'surname' => 'string|max:255',
            'email' => 'string|max:255',
            'phone' => 'string|max:255',
            'dateOfBirth' => 'required',
            'departmentId' => 'uuid',
            'level' => 'string|max:255',
            'organizationId' => 'uuid',
            
        ];
    }
}

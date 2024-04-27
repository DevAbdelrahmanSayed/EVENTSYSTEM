<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'un_id' => 'required|integer',
            'password' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'un_id.required' => 'The ID field cannot be empty.',
            'un_id.integer' => 'The id field must be an integer.',
            'un_id.max'=>  'The id field must be 9 digits.'
        ];

    }


}

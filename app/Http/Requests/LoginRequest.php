<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

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
    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->getMessages();

        // Consolidating all errors under a single key
        $customErrors = ['all_errors' => []];

        foreach ($errors as $field => $messages) {
            foreach ($messages as $message) {
                $customErrors['all_errors'][] = $message;
            }
        }

        throw new HttpResponseException(response()->json([
            'errors' => $customErrors
        ], 422));
    }


}

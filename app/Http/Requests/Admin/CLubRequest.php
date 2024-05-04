<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Redirect;

class CLubRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'category_id' => 'required|integer|exists:categories,id',
            'represented_id' => 'required|integer|exists:users,id',
            'club_name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $response = Redirect::back()
            ->withInput()
            ->withErrors($validator)
            ->with('error', 'Validation errors occurred. Please check your input.');

        throw new HttpResponseException($response);
    }
}

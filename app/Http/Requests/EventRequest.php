<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Redirect;

class EventRequest extends FormRequest
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
            'club_id' => 'required|integer|exists:clubs,id',
            'represented_id' => 'required|integer|exists:users,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'event_category_id' => 'required|integer|exists:event_categories,id',
            'child_id' => 'nullable|integer|exists:event_categories,id',
            'tag_id' => 'required|integer|exists:tags,id',
            'gender' => 'required',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'date_event' => 'required',
            'image' => 'required|image|max:2048',
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

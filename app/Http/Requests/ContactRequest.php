<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'=>['required','max:255'],
            'email'=>['required','email'],
            'subject'=>['required'],
            'message'=>['required'],
        ];
    }
    public function messages(): array
    {
        return [
            'name'=> 'this filed is required',
            'email'=> 'this filed is required',
            'subject'=> 'this filed is required',
            'message'=> 'this filed is required',
        ];
    }

}

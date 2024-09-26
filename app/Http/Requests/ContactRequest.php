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
            'name' => 'required',
            'email' => 'email|required',
            'subject' => 'required',
            'message' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'поле имя должно быть заполнено',
            'email.required' => 'поле email должно быть заполнено',
            'email.email' => 'поле email должно иметь символ @',
            'message.min:value' => 'поле сообщение должно иметь не меньше 5 символов',
        ];
    }
}

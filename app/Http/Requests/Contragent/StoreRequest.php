<?php

namespace App\Http\Requests\Contragent;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'inn' => 'required|numeric',
            'adress' => 'required|string|max:255',
            'phone' => 'required|string|max:20', // Предполагается, что телефон - это строка, исходя из вашего HTML
            'email' => 'required|email',
        ];
    }
}

<?php

namespace App\Http\Requests\Expenses;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'number' => 'required|numeric|max:255',
            'date' => 'required|date',
            'to_whom' => 'required|string|max:255',
            'item_of_expenditure_id' => 'required|exists:item_of_expenditures,id', // Убедитесь, что существует запись в связанной таблице
            'summ' => 'required|numeric',
            'document' => 'required|string|max:255',
        ];
    }
}

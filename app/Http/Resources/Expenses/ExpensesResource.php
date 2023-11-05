<?php

namespace App\Http\Resources\Expenses;

use App\Models\ItemOfExpenditure;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExpensesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'number' => $this->number,
            'date' => $this->date,
            'to_whom' => $this->to_whom,
            'item_of_expenditure' => new ItemOfExpenditure($this->itemOfExpenditure),
            'summ' => $this->summ,
            'document' => $this->document, 

        ];
    }
}

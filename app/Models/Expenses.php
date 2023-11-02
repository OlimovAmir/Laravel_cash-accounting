<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'expenses';

    protected $fillable = [
        'number',
        'date',
        'to_whom',
        'item_of_expenditure_id', // Поле для связи с таблицей "item_of_expenditure"
        'summ',
        'document',
    ];

    public function itemOfExpenditure()
    {
        return $this->belongsTo(ItemOfExpenditure::class);
    }
}

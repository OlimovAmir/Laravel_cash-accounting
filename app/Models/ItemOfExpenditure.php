<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemOfExpenditure extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'item_of_expenditures';

    protected $fillable = [
        'name',
    ];

    public function contractorsForExpenses()
    {
        return $this->belongsTo(ContractorsForExpenses::class);
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}

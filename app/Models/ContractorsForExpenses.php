<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractorsForExpenses extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'contractors_for_expenses';

    protected $fillable = [
        'name',
    ];
}

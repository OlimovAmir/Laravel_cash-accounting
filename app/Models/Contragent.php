<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contragent extends Model
{
    use HasFactory;

    protected $guarded = true;

    protected $table = 'contragents';

    protected $fillable = ['name', 'inn', 'address', 'phone', 'email'];
}

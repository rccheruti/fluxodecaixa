<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    /** @use HasFactory<\Database\Factories\CreditFactory> */
    use HasFactory;

    protected $fillable = [
        'date',
        'description',
        'value',
        'typeCash'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    /** @use HasFactory<\Database\Factories\DebitFactory> */
    use HasFactory;

    protected $fillable = [
        'date',
        'description',
        'value',
        'typeCash'
    ];
}

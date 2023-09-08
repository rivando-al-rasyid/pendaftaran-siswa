<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    protected $fillable = [
        'father_name',
        'father_occupation',
        'father_income',
        'mother_name',
        'mother_occupation',
        'mother_income',
        'phone_number',
    ];
}

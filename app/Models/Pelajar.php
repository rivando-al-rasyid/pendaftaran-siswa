<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'religion',
        'date_of_birth',
        'place_of_birth',
        'current_school',
        'address',
        'gender',
        'nisn',
    ];
}

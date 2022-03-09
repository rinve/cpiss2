<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalCounseling extends Model
{
    use HasFactory;
    protected $fillable=[
        'day',
        'startTime',
        'endTime',
    ];
}

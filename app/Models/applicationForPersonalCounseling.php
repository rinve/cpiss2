<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicationForPersonalCounseling extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'address',
        'number',
        'email',
        'status',
        'answer',
    ];
}

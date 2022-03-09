<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SSC extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'subject',
        'details',
        'group',
        'future',
    ];
}

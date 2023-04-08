<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coach extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'coach_url',
        'short_name',
        'long_name',
        'dob',
        'nationality_id',
        'nationality_name',
        'gender'
    ];
}

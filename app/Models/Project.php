<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'description',
        'address',
        'url',
        'photo_url',
        'thumb_url',
        'start_date',
        'completion_date',
    ];
}

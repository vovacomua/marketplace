<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'name',
        'address',
        'url',
        'photo_url',
        'thumb_url'
    ];
}

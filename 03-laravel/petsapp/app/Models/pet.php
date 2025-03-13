<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    protected $fillable = [
        'name',
        'image',
        'kind',
        'weight',
        'age',
        'breed',
        'location',
        'description'
    ];
}

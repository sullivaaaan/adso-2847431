<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    protected $fillable = [
        'user_id',
        'pet_id'
    ];

    // relationShip: adoption belongsTo User
    public function user(){
        return $this->belongsTo(User::class);
    }
    // relationShip: adoption belongsTo pet
    public function pet(){
        return $this->belongsTo(pet::class);
    }
}

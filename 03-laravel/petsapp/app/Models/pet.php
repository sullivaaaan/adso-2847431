<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'kind',
        'weight',
        'age',
        'breed',
        'location',
        'description',
        'status' 
    ];
    // relationShip: pet hasOne Adoption
    public function adoption(){
        return $this->hasOne(Adoption::class);
    }

   
    public function getIsAdoptedAttribute()
    {
        return (bool) $this->status; 
    }
}
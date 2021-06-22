<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture'
    ];


    public function setProfileAttribute($value){

        $value;
        $this->attributes['picture']=$value;
    }

    public function getProfileAttribute($value){

        return url($value);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'title_en',
        'description_en',
        'picture'
    ];

    public function pictures(){

        return $this->hasMany(Photos::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

}

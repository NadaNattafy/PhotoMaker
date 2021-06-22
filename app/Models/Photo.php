<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'album_id',
        'title_en',
        'picture'
    ];

    public function album(){

        return $this->belongsTo(Album::class);
    }

}

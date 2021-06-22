<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'name_en',
        'services_id'

    ];

    public function service(){

        return $this->belongsTo(Services::class,'services_id','id');
    }

}

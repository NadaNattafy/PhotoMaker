<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_en'

    ];

    public function menus(){

        return $this->hasMany(Menu::class,'services_id','id');
    }

    public function companies()

    {

        return $this->belongsToMany(Company::class, 'company_services');

    }

    protected $table = 'services';
    public $timestamps = false;

}

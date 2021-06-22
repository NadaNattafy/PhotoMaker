<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'mobile',
        'email',
        'name_en',
        'category_en',
        'services_id',
        'picture'
    ];

    public function Services()
    {

        return $this->belongsToMany(Services::class, 'company_services')->withPivot('value');

    }

}

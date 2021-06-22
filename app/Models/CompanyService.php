<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyService extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'services_id',
        'value',
        'value_en'
    ];

    public function service(){

        return $this->belongsTo(Services::class,'services_id','id');
    }

    public function company(){

        return $this->belongsTo(Company::class);
    }

}

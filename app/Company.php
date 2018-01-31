<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'company';
    protected $fillable = [
        'company_name', 'company_about', 'company_logo','company_cover','user_id'
    ];
}

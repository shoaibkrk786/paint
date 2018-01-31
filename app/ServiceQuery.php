<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceQuery extends Model
{
    //
    protected $table = 'services_query';
    protected $fillable = [
        'name', 'mobile_number', 'description','is_read','is_responded','type'
    ];
}

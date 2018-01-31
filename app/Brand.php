<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = [
        'brand_name', 'brand_detait', 'brand_pic','brand_sort_id',
    ];
    public function product()
    {
        return $this->hasMany('App\Product');
    }
    public function shade()
    {
        return $this->hasMany('App\Shade');
    }
    public function paking()
    {
        return $this->hasMany('App\Paking');
    }
}

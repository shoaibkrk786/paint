<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'product_name', 'product_detait', 'product_pic','product_sort_id','brand_id',
    ];
    public function brand()
    {
        return $this->belongsTo('App\Brand', 'foreign_key');
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

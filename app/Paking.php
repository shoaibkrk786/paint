<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paking extends Model
{
    protected $table = 'pakinges';
    protected $fillable = [
        'paking_value', 'paking_price', 'paking_discount_price','paking_discount_value',
        'paking_is_discount','paking_sort_id','brand_id','product_id','shade_id',
    ];
    public function brand()
    {
        return $this->belongsTo('App\Brand', 'foreign_key');
    }
    public function product()
    {
        return $this->belongsTo('App\Product', 'foreign_key');
    }
    public function shade()
    {
        return $this->belongsTo('App\Shade', 'foreign_key');
    }
}

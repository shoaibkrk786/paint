<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = [
        'shipping_rate', 'order_rand_id', 'shipping_address','shipping_city',
        'shipping_state','unit_price','discounted_price','user_id','brand_id',
        'product_id','shade_id','shipping_email','packing_value','shipping_mobile_number',
        'name','comments','brand_id','product_id'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shade extends Model
{
    protected $table = 'shades';
    protected $fillable = [
        'shade_name', 'shade_code', 'shade_pic','shade_color','shade_type',
        'shade_sort_id','brand_id','product_id',
    ];
    public function brand()
    {
        return $this->belongsTo('App\Brand', 'foreign_key');
    }
    public function product()
    {
        return $this->belongsTo('App\Product', 'foreign_key');
    }
    public function paking()
    {
        return $this->hasMany('App\Paking');
    }
    
            
}

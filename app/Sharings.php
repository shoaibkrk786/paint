<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sharings extends Model
{
    //
    protected $table = 'sharings';
    protected $fillable = [
        'user_text', 'user_img', 'is_text','is_image','status',
        'user_id'
    ];
    
    
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table='products';
    public function category()
    {
        return $this->belongsTo(category::class,'cat_id','id');
    }
}

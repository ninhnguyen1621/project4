<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    public $timestamps=false;
    protected $primaryKey = 'id';
    protected $table='order_detail';
    protected $fillable=['order_code','product_id','product_name','qty','product_price'];
}

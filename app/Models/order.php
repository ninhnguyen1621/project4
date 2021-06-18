<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public $timestamps=false;
    protected $primaryKey = 'id';
    protected $table='orders';
    protected $fillable=['customer_id','buyer_id','status'.'order_code'];


}

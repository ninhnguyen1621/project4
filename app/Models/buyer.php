<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    public $timestamps=false;
    protected $primaryKey = 'id';
    protected $table='buyer';
    protected $fillable=['name','address','phone','email','note','payment_method'];
}

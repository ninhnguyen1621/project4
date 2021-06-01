<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Searchable;

class category extends Model
{
    protected $table='category';
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'name',
        'Category_status ',
    ];
    public function all_product()
    {
        return $this->hasMany(product::class,'cat_id','id');
    }
}

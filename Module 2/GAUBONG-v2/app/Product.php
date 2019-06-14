<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function billDetail()
    {
        return $this->hasMany('App\BillDetail');
    }

    public function productType()
    {
        return $this->belongsTo('App\ProductType', 'id_type');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment', 'id_product', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = 'bill_detail';

    public function bill()
    {
        return $this->belongsTo('App\Bill', 'id_bill');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'id_customer');
    }
}

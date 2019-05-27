<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function cities()
    {
        return $this->belongsTo('App\City', 'city_id');
    }
}

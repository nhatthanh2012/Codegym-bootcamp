<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    function posts()
    {
       return $this->hasmany('App\Post');
    }    
}

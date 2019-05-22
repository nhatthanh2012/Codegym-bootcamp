<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller2 extends BaseController
{ 
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function showInfo2()
    {
        echo 'bạn đã điều hướng đến Controller22222222';
        return redirect()->route('hcm');
    }
}
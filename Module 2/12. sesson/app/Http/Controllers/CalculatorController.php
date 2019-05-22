<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    function calculate(Request $request)
    {
        $number1 = $request->number1;
        $number2 = $request->number2;
        $name= $request->pheptinh;
        $giatri = 0;
        
        switch($name)
        {
            case 'Addtion': 
                $giatri = $number1 + $number2;
                break;
            case 'Subtraction(-)':
                $giatri = $number1 - $number2;
                break;
            case 'Multiplication(*)':
                $giatri = $number1 * $number2;
                break;
            case 'Division(/)':
                if($number2 != 0)
                {
                    $giatri = $number1 / $number2;
                }
                else 
                {
                    echo 'khong chia dc cho 0';
                }
        }
        return view('calculator', compact('giatri'));
    }
}

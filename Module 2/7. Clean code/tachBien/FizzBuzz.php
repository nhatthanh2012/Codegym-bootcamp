<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 4:36 PM
 */
class FizzBuzz
{
    public $status;
    public function __construct($number)
    {
        $isFizz = $isFizz === 0;
        $isBuzz = $isBizz === 0;
        if($isFizz == 0 && $isBizz == 0) {
            $this->status =  "FizzBuzz";
        } elseif ($isFizz == 0) {
            $this->status = "Fizz";
        } elseif ($isBizz == 0) {
            $this->status = "Buzz";
        } else {
            $this->status =  $number."";
        }
    }
    public function __toString()
    {
        return $this->status;
    }
}
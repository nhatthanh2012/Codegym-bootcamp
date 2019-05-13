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
        
        if($isFizz && $isBizz) {
            $this->status =  "FizzBuzz";
        } elseif ($isFizz) {
            $this->status = "Fizz";
        } elseif ($isBizz) {
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
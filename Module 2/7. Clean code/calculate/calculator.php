<?php
const ADDTION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

function division()
{
    if ($secondOperand != 0) {
        return $firstOperand / $secondOperand;
    } else {
        echo("Can not divide by 0");       
    }
}

class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator) 
    {
        switch ($operator)
        {
            case ADDTION:
                return $firstOperand + $secondOperand;
                break;
            case SUBTRACTION:
                return $firstOperand - $secondOperand;
                break;
            case MULTIPLICATION:
                return $firstOperand * $secondOperand;
                break;
            case DIVISION:
                division();
                break;
            default:
                echo ("Unsupported operation");
        }
    }
}
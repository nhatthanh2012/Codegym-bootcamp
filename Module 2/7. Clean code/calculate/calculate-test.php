<?php
require "calculator.php";
use PHPUnit\Framework\TestCase;
const ADDITION = '+';

class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {
        $firstOperand = 1;
        $secondOperand = 1;
        $operator = ADDITION;
        $expected = 2;
        $calculator = new Calculator();
        $result = $calculator->calculate($firstOperand, $secondOperand, $operator);
        $this->assertEquals($expected, $result);
    }
}
<?php
    include_once "Resizeable.php";
    include_once "shape.php";
    

    class Circle extends Shape implements Resizeable
    {
        public $radius;
        public $percentRate;
        public function __construct($_name,$_radius,$_percentRate)
        {
           parent::__construct($_name);
           $this->radius = $_radius;
           $this->percentRate = $_percentRate;
        }
        public function calculateArea(){
            return pi()*pow($this->radius,2);
        }
        public function calculatePerimeter()
        {
            return  2*pi()*$this->radius;
        }
        public function resize()
        {
            return $this->calculateArea() + $this->calculateArea()*$this->percentRate;
        }
    }  
?>
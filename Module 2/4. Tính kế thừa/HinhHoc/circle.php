<?php
    include_once "shape.php";
    class Circle extends Shape
    {
        public $radius;
        public function __construct($_name,$_radius)
        {
           parent::__construct($_name);
           $this->radius = $_radius;
        }
        public function calculateArea(){
            return pi()*pow($this->radius,2);
        }
        public function calculatePerimeter(){
            return  2*pi()*$this->radius;
        }
    }

   
?>
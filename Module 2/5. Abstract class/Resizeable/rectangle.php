<?php
    include_once "shape.php";
    include_once "Resizeable.php";
    class Rectangle extends Shape implements Resizeable
    {
        public $width;
        public $height;
        public $percentRate;

        function __construct($_name, $_width,$_height,$_percentRate)
        {
            parent::__construct($_name);
            $this->width = $_width;
            $this->height = $_height;
            $this->percentRate = $_percentRate;
        }
        function calculateArea()
        {
            return $this->width*$this->height;
        }
        function calculatePerimeter()
        {
            return ($this->width + $this->height)*2;
        }
        public function resize()
        {
            return $this->calculateArea() + $this->calculateArea()*$this->percentRate;
        }
    }
?>
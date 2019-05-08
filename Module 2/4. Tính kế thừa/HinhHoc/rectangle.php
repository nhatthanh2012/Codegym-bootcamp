<?php
    include_once "shape.php";
    class Rectangle extends Shape 
    {
        public $width;
        public $height;
        function __construct($_name, $_width,$_height)
        {
            parent::__construct($_name);
            $this->width = $_width;
            $this->height = $_height;
        }
        function calculateArea()
        {
            return $this->width*$this->height;
        }
        function calculatePerimeter()
        {
            return ($this->width + $this->height)*2;
        }
    }

    // $rectangle = new Rectangle('hình chữ nhật',40,30);
    // echo $rectangle->calculateArea();
    // echo '<br>';
    // echo $rectangle->calculatePerimeter();
?>
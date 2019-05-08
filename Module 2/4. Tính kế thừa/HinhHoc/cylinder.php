<?php
    include_once "circle.php";
    class Cylinder extends Circle 
    {
        public $height;
        public function __construct($_name,$_radius,$_height)
        {
            parent::__construct($_name,$_radius);
            $this->height = $_height;
        }
        public function calculateArea()
        {
            return parent::calculateArea()*2 + parent::calculatePerimeter()*$this->height;
        }
        public function calculateVolume()
        {
            return parent::calculateArea() * $this->height;
        }        
    }
    
    
?>
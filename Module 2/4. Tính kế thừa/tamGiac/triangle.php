<?php
    class Shape 
    {
        public $color;
        function __construct($color)
        {
            $this->color = $color;
        }
    }    

    class Triangle extends Shape
    {
        public $side1;
        public $side2;
        public $side3;

        function __construct($color,$side1,$side2,$side3){
            parent::__construct($color);
            $this->side1 = $side1;
            $this->side2 = $side2;
            $this->side3 = $side3;
        }
        function getPerimeter(){
            return $this->side1+$this->side2+$this->side3;
        }
    }
    // $shape = new Shape('blue');
    // echo 'tam giác màu : '. $shape->color;
    // $triangle = new Triangle('yellow',2,4,5);
    // echo $triangle->getPerimeter();
?>
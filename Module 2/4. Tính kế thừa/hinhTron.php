<?php
     class Circle 
     {
        private $radius;
        protected $color;
        function __construct($_radius, $_color)
        {
            $this->radius = $_radius;
            $this->color = $_color;
        }
        function getArea(){
            return pi()*pow($this->radius, 2);
        }
        function getPerimeter(){
            return pi()*$this->radius*2;
        }
        function toString()
        {
            echo '<br> Circle Color: '.$this->color;
            echo '<br> Circle area: '.$this->getArea();
            echo '<br> Perimeter area: '.$this->getPerimeter();
        }  

     }   
    

     class Cylinder extends Circle
     {
         private $height;
         function __construct($_radius,$_color, $_height)
        {
            parent::__construct($_radius,$_color);
            $this->height = $_height;
        }

         function getArea()
        {
            return parent::getPerimeter()*$this->height + parent::getArea()*2;
        }
        function getVolume()
        {
            return parent::getArea()*$this->height;
        }
        function toString()
        {
            echo '<br><br> Cylinder Color: '.$this->color;
            echo '<br> Cylinder area: '.$this->getArea();
            echo '<br> Cylinder Perimeter: '.$this->getPerimeter();
        }  
     }

    $circle= new Circle(30, 'yelow');    
    $circle->toString();

    $cylinder = new Cylinder(40,'blue',30);
    $cylinder->toString();

?>
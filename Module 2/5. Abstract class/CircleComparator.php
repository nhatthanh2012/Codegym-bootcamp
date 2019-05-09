<?php
    class Circle 
    {
        private $radius;
        private $name;

        public function __construct($_name,$_radius)
        {
            $this->radius = $_radius;
            $this->name = $_name;
        }
        function setRadius($_radius)
        {
            $this->radius = $_radius;
        }
        function getRadius()
        {
            return $this->radius;
        }
    }

    interface Comparator 
    {
        public function compareTo($obj1, $obj2);
        
    }

    class CircleComparator implements Comparator
    {        
        public function compareTo($circle1, $circle2)
        {
            $circle1 = $circle1->getRadius();
            $circle2 = $circle2->getRadius();
            if($circle1 > $circle2)
            { 
                return 1;
            }
            else if ($circle1 < $circle2)
            {
                return -1;
            }
            else 
            {
                return 0;
            }
        }   
        
    }

    $circle1 = new Circle('circle one', 5);
    $circle2 = new Circle('circle two', 5);
    $circleComparator = new CircleComparator();
    var_dump($circleComparator->compareTo($circle1,$circle2));

?>
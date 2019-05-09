<?php
    // lop circle
    class Circle 
    {
        public $radius;
        public $name;

        public function __construct($_name,$_radius)
        {
            $this->radius = $_radius;
            $this->name = $_name;
        }
    }
    // interface comparable
    interface Comparable
    {
        public function compareTo($objOther);
    }

    // lop comparaCircle
    class ComparableCircle extends Circle implements Comparable
    {
        public function __construct($_name,$_radius)
        {
            parent::__construct($_name,$_radius);
        }
        public function compareTo($circleOther)
        {
            $circleOtherRadius = $circleOther->radius;
            if($this->radius > $circleOtherRadius)
            {
                return 1;
            }
            else if ($this->radius < $circleOtherRadius)
            {
                return -1;
            }
            else
            {
                return 0;
            }
        }
    }

    // chay thu
    $circle1 = new ComparableCircle('Circle number 1: ', 2);
    $circle2 = new ComparableCircle('Circle number 1: ', 2);
    echo $circle1->compareTo($circle2);
?>
<?php
    class Point 
    {
        public $x;
        public $y;
        function __construct($_x,$_y)
        {
            $this->x = $_x;
            $this->y = $_y;
        }
        function toString()
        {
            return 'x = '.$this->x.', y = '.$this->y;
        }        
    }

    class MoveablePoint extends Point 
    {
        public $xSpeed;
        public $ySpeed;
        public function __construct($_x,$_y,$_xSpeed,$_ySpeed)
        {
            parent::__construct($_x,$_y);
            $this->xSpeed = $_xSpeed;
            $this->ySpeed = $_ySpeed;
        }
        function toString()
        {
            return 'x = '.$this->x.', y = '.$this->y.', xSpeed = '.$this->xSpeed.', ySpeed = '.$this->ySpeed;
        }  
        function move()
        {
            $this->x += $this->xSpeed;
            $this->y += $this->ySpeed;
            return 'x = '.$this->x.', y = '.$this->y;
        }        
    }
    $point = new Point(5, 5);
    $moveablePoint = new MoveablePoint(4,6,2,2);
    echo $point->toString();
    echo '<br>'.$moveablePoint->toString();
    echo '<br>'.$moveablePoint->move();

?>
<?php
    class Point2D 
    {
        public $x;
        protected $y;
        function __construct($_X,$_Y){
            $this->x = $_X;
            $this->y = $_Y;
        }
        
        function toString()
        {
            return 'x= '.$this->x.' & y= '.$this->y;

        }
    }
    class Point3D extends Point2D
    {
        public $z;
        function __construct($_X,$_Y,$_Z)
        {
            parent::__construct($_X,$_Y);
            $this->z = $_Z;
        }
        function setZ()
        {
            return $this->z = $_Z;
        }
        function getZ()
        {
            return $this->z;
        }
        
        function toTring()
        {
            return 'x= '.$this->x.' & y= '.$this->y.' & z = '.$this->z;
        }
    }
    
    $point2d = new Point2D(20,36);
    echo $point2d->toString();
    echo '<br>';
    $point3d = new Point3D(12,5,56);
    echo $point3d->toString();
    echo '<br>';
    echo 'z = '. $point3d->getZ();
    
    
?>
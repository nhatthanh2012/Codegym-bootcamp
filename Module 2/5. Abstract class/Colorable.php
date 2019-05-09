<?php          
    interface Colorable
    {
        function howToColor();        
    }
    class Square implements Colorable
    {
        public $name;
        public $width;
        function __construct($_name, $_width)
        {
            $this->name = $_name;
            $this->width = $_width;

            function getArea()
            {
                return $this->width*$this->width;
            }
            function howToColor()
            {
                
            }
        }
    }

?>



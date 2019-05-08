<?
    include_once 'Rectangle.php';
    class Square extends Rectangle
    {
        public function __construct($name, $width)
        {
            parent::__construct($name, $width, $width, $width);
        }
    }
    // include_once "rectangle.php";
    // class Square extends Rectangle
    // {
    //     public function __construct($_name,$_width)
    //     {
    //         parent::__construct($_name, $_width,$_width,$_width);
    //     }
        
    // }  
   
?>
<?
    include_once 'Rectangle.php';
    class Square extends Rectangle
    {
        public function __construct($_name, $_width,$_height,$_percentRate)
        {
            parent::__construct($_name, $_width,$_height,$_percentRate);
        }
    }         
?>
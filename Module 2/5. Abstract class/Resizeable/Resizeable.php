<?php
    include "shape.php";

    interface Resizeable 
    {
        function resize();         
    }
    
    include "circle.php";   
    include "rectangle.php";
    //include "D:/XAMPP/htdocs/Codegym-bootcamp/Module 2/5. Abstract class/Resizeable/square.php"; 
    class Square extends Rectangle
    {
        public function __construct($_name, $_width,$_height,$_percentRate)
        {
            parent::__construct($_name, $_width,$_height,$_percentRate);
        }
    } 

    $circle = new Circle('CIRCLE', 20, 0.5);
    echo $circle->name . ' before increasing: '.$circle->calculateArea(). '<br>';
    echo $circle->name . ' after increasing: '.$circle->resize(). '<br>';
    
    $rectangle = new Rectangle ('RECTANGLE', 60, 30, 2);
    echo '<br><br>'.$rectangle->name . ' before increasing: '.$rectangle->calculateArea();
    echo '<br>'.$rectangle->name . ' after increasing: '.$rectangle->resize();

    $square = new Square('SQUARE',40,40,2);
    echo '<br><br>'.$square->name . ' before increasing: '.$square->calculateArea();
    echo '<br>'.$square->name . ' after increasing: '.$square->resize();

?>
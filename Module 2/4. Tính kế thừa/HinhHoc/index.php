<?php

 include "circle.php";
 include "cylinder.php";
 include "rectangle.php";
 include "square.php";

$circle1 = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle1->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle1->calculatePerimeter() . '<br />';

$cylinder1 = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder1->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder1->calculatePerimeter() . '<br />';

$rectangle1 = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle1->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle1->calculatePerimeter() . '<br />';

$square1 = new Rectangle('Square 01', 4 , 4);
echo 'Rectangle area: ' . $square1->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square1->calculatePerimeter() . '<br />';

?>

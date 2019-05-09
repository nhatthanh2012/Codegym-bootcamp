<?php
    include "Chicken.php";
    include "Tiger.php";
    include "fruit/Apple.php";
    include "fruit/Orange.php";

    echo '---- Animals <br>';
    $animals = array();
    $animals[0] = new Tiger();
    $animals[1] = new Chicken();
    foreach ($animals as $animal)
    {
        echo $animal->makeSound().'<br>';
        if ($animal instanceof Chicken)
        {
            echo $animal ->howToEat()."  ";
        }
    }

    echo '<br><br>';
    echo '<br>---- Fruit <br>';
    $fruits = array();
    $fruits[0] = new Apple();
    $fruits[1] = new Orange();
    foreach($fruits as $fruit)
    {
        echo $fruit->howToEat().'<br>';
    }  

?>
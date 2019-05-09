<?php
    include_once "Animal.php";
    include_once "D:/XAMPP/htdocs/Codegym-bootcamp/Module 2/5. Abstract class/abstract & interface/InterfaceClass/Edible.php";

    class Chicken extends Animal implements Edible
    {
        public function makeSound()
        {
            return "chicken: chip chip...";      
        }
        public function howToEat()
        {
            return "could be fried";
        }
    }
?>
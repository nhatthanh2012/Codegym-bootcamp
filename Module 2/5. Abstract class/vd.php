<?php
    abstract class TraiCay
    {
        private $color;
        
        abstract public class eat();
        public function setColor($color)
        {
            $this->color = $color;
        }
        public function getColor()
        {
           return $this->color;
        }        
        
    }

    class Apple extends TraiCay
    {
        public function eat()
        {
            echo "ăn nhả hạt";
        }
    }

    class Orange extends TraiCay
    {
        public function eat()
        {
            echo 'boc vo roi an';
        }
    }

?> 
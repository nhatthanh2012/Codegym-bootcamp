<?php
    include_once "fruit.php";
    class Orange extends fruit
    {
        public function howToEat()
        {
            return "Orange could be juiced";
        }
    }
?>
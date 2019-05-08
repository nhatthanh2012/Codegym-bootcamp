<?php
    class Person
    {
        public static $name='thanh';
        public $age;
        public $address;//contruct là mặc định, không gọi vẫn chạy.
        function setName($_name){ 
            $this->name = $_name;
        }
        function getName(){ 
            return $this->name;
        }
        //function setAge

        
    };
    // $person = new Person();
    // $person->setName('thanh');
    // echo $person->getName().'<br>';
    // var_dump($person);
    echo Person::$name;
    // echo Person::getName();
?>
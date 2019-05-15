<?php
    namespace Model;

    class Customer
    {
        public $name;
        public $email;
        public $address;
        
        public function __construct($_name,$_email,$_address)
        {
            $this->name = $_name;
            $this->email= $_email;
            $this->address = $_address;

        }
    }
?>
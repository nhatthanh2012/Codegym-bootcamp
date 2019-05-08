<?php
    class User 
    {
        public $username;
        public $userId;
        public $email;
        public $password;
        
        function __construct($arr){
            $this->username = $arr['username'];
            $this->userId = $arr['userId'];
            $this->email = $arr['email'];
            $this->password =$arr['password'];

        }         
        
        function login(){
            echo 'login suceed';
        }
        function logout(){
            echo ' logout suceed';
        }
    }

    class Admin extends User
    {
        function __construct($arr,$_accessLevel){
            parent::__construct($arr);
            $this->accesslevel = $_accessLevel;
        }
       function editUser($_username2){
           $this->username2 = $_username2;
       }

       function logout(){
        echo 'user logout suceed';
        }
        function userlogout(){
           parent::logout();
        }
    }

    $admin = new Admin('thanh','211346', 'nhatthanh2012@gmail.com', 123456, 2);
    $admin->login();
    $admin->setEmail('nhatthanh2012@gmail.com');   
   
?>

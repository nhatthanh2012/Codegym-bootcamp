<?php
    class User 
    {
        public $id;
        public $username;
        public $password;
        public $fullname;
        public $birthday;
        public $role;        
        public $email;
        

        public function __construct($username, $password, $fullname, $birthday, $role, $email)
        {               
            $this->username = $username;
            $this->password = $password;
            $this->fullname = $fullname;
            $this->birthday = $birthday;
            $this->role = $role;
            $this->email = $email;
        }
    }

    class DataUser 
    {
        private $conn = NULL;
        private $result = NULL;

        function connect()
        {
            $this->conn = new PDO("mysql:host=localhost; dbname=quanlyuser", 'root','');
            if($this->conn)
            {
                echo 'user is sucessfull connection';
            }
            else 
            {
                echo 'fail connection';
            }
        }       

        function register($username,$password, $fullname, $birthday, $email) // them
        {
            $sql = "INSERT INTO users (username, password, fullname, birthday, email) 
                    VALUES ('$username','$password', '$fullname', '$birthday', '$email')";
            $this->result = $this->conn->prepare($sql);
            return $this->result->execute();
        } 

        function login($username, $password) // get data bang username
        {
            $sql = "SELECT * FROM users WHERE username = $username AND password = $password";
            $this->result = $this->conn ->prepare($sql);
            $this->result ->execute();         
          
        }       

        public function getDataId($id)
        {
            $sql = "SELECT * FROM customers WHERE id = $id";
            $statement = $this->conn->prepare($sql);            
            $statement->execute();
            
            $row = $statement->fetch();
            $user = new User($row['username'], $row['password'], $row['fullname'], 
            $row['birthday'], $row['role'], $row['email']);
            $user->id = $row['id'];
            return $user;
        }
        function getAllUser() 
        {
            $sql = "SELECT * FROM users";
            $this->result = $this->conn ->prepare($sql);
            $this->result ->execute();

            $array = $this->result->fetchAll();

            $users = [];
            foreach ($array as $value)
            {
                $user = new User($value['username'], $value['password'], $value['fullname'], 
                                $value['birthday'], $value['role'], $value['email']);
                $user->id = $value['id'];
                $users[] = $user; 
                              
            } 
            return $users;  
        }

        function editUser($id, $username, $password, $fullname, $birthday,  $email) // sua
        {
            $sql = "UPDATE users SET username = '$username', password= '$password', fullname = '$fullname',
                    birthday= $birthday, email= $email WHERE $id";
            $this->result = $this->conn->prepare($sql);
            $this->result->execute();
            return $this->result;
        }

        function deleteUser($id)
        {
            $sql = "DELETE FROM users WHERE username = $id";
            $this->result = $this->conn->prepare($sql);
            $this->result->execute();
        }
    }
?>

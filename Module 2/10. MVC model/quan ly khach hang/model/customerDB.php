<?php  
    class Customer
    {
        public $id;
        public $name;
        public $email;
        public $address;
        public function __construct($name, $email, $address)
        {
            $this->name = $name;
            $this->email = $email;
            $this->address = $address;
        }
    }

    class CustomerDB
    {
        private $hostname = 'localhost';
        private $username = 'root';
        private $pass = '';
        private $dbname = 'quanlykhachhang';

        private $conn = NULL;
        private $result = NULL;

        public function connect()
        {
            $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname",$this->username,'');
            if($this->conn) 
            {
                echo 'sucessful connection';
            } else
            {
                echo 'fail connection';
            }
            return $this->conn;
        }

        public function insertData($name, $email, $address)
        {
            $sql = "INSERT INTO customers(ID, Name, Email, Address) VALUES (null,'$name', '$email', '$address')";
            $this->result = $this->conn->prepare($sql);           
            return $this->result->execute();
        }

        
        public function getDataId($id)
        {
            $sql = "SELECT * FROM customers WHERE id = $id";
            $statement = $this->conn->prepare($sql);            
            $statement->execute();
            
            $row = $statement->fetch();
            $customer = new Customer($row['Name'], $row['Email'], $row['Address']);
            $customer->id = $row['ID'];
            return $customer;
        }

        public function getAllData()
        {
            $sql = "SELECT * FROM customers";
            $statement = $this->conn->prepare($sql);

            $statement->execute();
            
            $this->result = $statement->fetchAll();
            
            $customers= [];
            foreach ($this->result as $row) 
            {
                $customer = new Customer($row['Name'], $row['Email'], $row['Address']);
                $customer->id = $row['ID'];
                
                $customers[] = $customer;
            }            
            return $customers;
        }       

        public function updateData($id,$name, $email, $address)
        {
            $sql = "UPDATE customers SET Name = '$name', Email = '$email' , Address = '$address' WHERE ID = $id";
            $this->result = $this->conn->prepare($sql);
            $this->result->execute();
            return $this->result;
        }

        public function deleteData($id)
        {
            $sql = "DELETE FROM customers WHERE ID = $id";
            $this->result = $this->conn->prepare($sql);
            $this->result->execute();
            return $this->result;

        }
    }
?>
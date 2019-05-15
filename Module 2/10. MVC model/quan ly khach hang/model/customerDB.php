<?php    
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

        public function _execute($sql)
        {
           $this->result = $this->conn->prepare($sql);      
           $this->result->execute();
           return $this->result;           
        }

        public function getData()
        {
            if($this->result)
            {
                $this->result->setFetchMode(PDO::FETCH_ASSOC);
                $data = $this->result->fetchAll();                
            }else
            {
                $data = 0;
            }
            return $data;
        }

        public function getAllData()
        {
            if(!$this->result)
            {
                $data = 0;
            } else
            {
                while($datas = $this->getData())
                {
                    $data[] = $data;
                }
            }
            return $data;
        }

        public function insertData($name, $email, $address)
        {
            $sql = "INSERT INTO customers VALUES(null, '$name', '$email', '$address')";
            return _execute($sql);
        }

        public function updateData($id,$name, $email, $address)
        {
            $sql = "UPDATE customers SET Name = '$name', Email = '$email' , Address = '$address' WHERE ID = $id";
            return _execute($sql);
        }

        public function deleteData()
        {
            $sql = "DELETE FROM customers WHERE ID = $id";
            return _execute($sql);

        }
    }
?>
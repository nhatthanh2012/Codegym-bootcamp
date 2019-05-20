<?php
    class Products
    {
        public $id;
        public $name;
        public $price;
        public $description;
        public $producer;

        public function __construct($_name, $_price, $_description, $_producer)
        {
            $this->name = $_name;
            $this->price = $_price;
            $this->description = $_description;
            $this->producer = $_producer;
        }
    }

    class DBproducts
    {
        public $conn = NULL;

        function connectDB()
        {            
            $this->conn = new PDO("mysql:host=localhost;dbname=quanlysanpham", 'root', '')
           or die ('kết nối thất bại');
        }

        function insertProduct($_name, $_price, $_description, $_producer) {
            $sql = "INSERT INTO products (id, name, price, description, producer) 
                    VALUES (null,'$_name', '$_price', '$_description', '$_producer')";
            $result = $this->conn->prepare($sql);
            $result->execute();
            return $result;
        }

        function getProduct($_id)
        {
            $sql = "SELECT name, price, description, producer FROM products WHERE id = $_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            var_dump($result);
            // foreach($result as $row)
            // {
            //     $name = $row['name']."<br>";
            //     $price = $row['price']."<br>";
            //     $description = $row['description']."<br>";
            //     $producer = $row['producer']."<br>";
            // }           
             return $result;
        }

        function getAllProducts()
        {
            $sql = "SELECT * FROM products";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
           
            // foreach($result as $key=>$row)
            // {                
            //     $name = $row['name']."<br>";
            //     $price = $row['price']. "<br>";
            //     $description = $row['description']." <br>";
            //     $producer = $row['producer']."<br>";
            // }
            return $result;
        }

        function editProduct($_id, $_name, $_price, $_description, $_producer)
        {
            $sql = "UPDATE products 
                    SET name='$_name',price='$_price',  description='$_description',producer='$_producer' 
                    WHERE id = $_id";
            $result = $this->conn->prepare($sql);
            $result->execute();
            
            return $result;
        }

        function deleteProduct($_id)
        {
            $sql = "DELETE FROM products WHERE id ='$_id' ";
            $result = $this->conn->prepare($sql);
            $result->execute();
            return $result;
        }

        function SearchName($keyword)
        {
            $sql = "SELECT name,price, description, producer FROM products WHERE name like '%$keyword%' ORDER BY  id DESC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);            
            return $result;
        }

    }
?>
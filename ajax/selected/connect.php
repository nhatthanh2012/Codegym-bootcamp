<?php 
   
    $servername = "localhost";
    $username = "username";
    $password = "";
    $dbname = "production";

    // Create connection
    $conn = new mysqli("localhost", 'root', 'password', 'production');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    // $result = $conn->query($sql);
?>
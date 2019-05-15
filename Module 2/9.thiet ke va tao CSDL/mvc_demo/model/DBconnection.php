<?php
    class DBconnection
    {
        private $servername;
        private $dbname;
        private $username;
        private $password;
        public static function connect()
        {
            self::$servername= '127.0.0.1';
            self::$dbname = 'classicmodel';
            self::$username='root';
            self::$password = '';
            $conn = new PDO(mysql:host = "$this->servername"; dbname = "$this->dbname"','$this->username','$this->password');
        }
    }
?>
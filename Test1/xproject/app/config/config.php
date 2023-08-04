<?php 
define('APP_ROOT', dirname(__FILE__,3));
define('DOMAIN' , 'https://localhost/xproject/');


// class Database {
//     // Specify your own database credentials
//     private $host = 'localhost';
//     private $db_name = 'MVC';
//     private $username = 'root';
//     private $password = '';
//     public $conn;

//     // Get the database connection
//     public function getConnection() {
//         $this->conn = null;

//         try {
//             $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
//             $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         } catch(PDOException $exception) {
//             echo 'Connection error: ' . $exception->getMessage();
//         }

//         return $this->conn;
//     }
// }
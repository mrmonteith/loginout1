<?php
# database.class.php - database class for connections to MySQL database
# Created by: Michael Monteith
# Creaded: 3/24/24

/* 
    Database Connection (Database.php):
    ◦ Create a class to handle database connections using PDO.

*/

class Database
    {
        private $conn;
        public function __construct()
        {
            try
            {
            $this->conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
            }
        }

        public function getConnection()
        {
            return $this->conn;
        }
    }
?>
<?php

class Database
{
    public $conn;

    public function __construct()
    {
        $Host = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "students";

        try {
            $this->conn = new PDO("mysql:host=$Host;dbname=$dbName", $userName, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            //echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

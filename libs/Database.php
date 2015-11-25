<?php

class Database {
    private $conn;

    public function __construct() {
         // Create connection
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    /**
     * @return mysqli
     */
    public function getConn() {
        return $this->conn;
    }

}
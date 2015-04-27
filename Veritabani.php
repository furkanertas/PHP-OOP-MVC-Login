<?php
class Veritabani {
    private $host = "localhost";
    private $db_name = "fotpay";
    private $username = "root";
    private $password = "";
    public $conn;
    public function __construct () {
        return $this->baglan ();
    }
    public function baglan () {
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
} 
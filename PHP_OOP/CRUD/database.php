<?php

// Class Database untuk koneksi ke MySQL
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "praktekwebdb2";
    public $conn;
    
    // Constructor - membuat koneksi saat object dibuat
    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        
        // Cek apakah koneksi berhasil
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}

?>

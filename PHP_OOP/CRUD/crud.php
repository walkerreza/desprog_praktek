<?php

require_once 'database.php';

// Class Crud untuk operasi CRUD
class Crud
{
    private $db;
    
    // Constructor - membuat koneksi database
    public function __construct()
    {
        $this->db = new Database();
    }
    
    // Create - menambah data baru
    public function create($jabatan, $keterangan)
    {
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        $result = $this->db->conn->query($query);
        
        return $result;
    }
    
    // Read - membaca semua data
    public function read()
    {
        $query = "SELECT * FROM jabatan";
        $result = $this->db->conn->query($query);
        
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        
        return $data;
    }
    
    // Read by Id - membaca data berdasarkan ID
    public function readById($id)
    {
        $query = "SELECT * FROM jabatan WHERE id = $id";
        $result = $this->db->conn->query($query);
        
        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    
    // Update - mengubah data berdasarkan ID
    public function update($id, $jabatan, $keterangan)
    {
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = $id";
        $result = $this->db->conn->query($query);
        
        return $result;
    }
    
    // Delete - menghapus data berdasarkan ID
    public function delete($id)
    {
        $query = "DELETE FROM jabatan WHERE id = $id";
        $result = $this->db->conn->query($query);
        
        return $result;
    }
}

?>

<?php
class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'caresync_db';
    private $charset = 'utf8mb4';
    private $conn;

    public function connect() {
        $this->conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->dbname
        );

        if ($this->conn->connect_error) {
            die("❌ DB Connection failed: " . $this->conn->connect_error);
        }

        $this->conn->set_charset($this->charset);
        return $this->conn;
    }
}
?>

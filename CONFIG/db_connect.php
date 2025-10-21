<?php
class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'caresync_db';
    private $charset = 'utf8mb4';
    private $conn;

    // Connect to database
    public function connect() {
        $this->conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->dbname
        );

        if ($this->conn->connect_error) {
            die("❌ Database Connection Failed: " . $this->conn->connect_error);
        }

        $this->conn->set_charset($this->charset);
        return $this->conn;
    }

    // Optional: Close the connection
    public function close() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
?>

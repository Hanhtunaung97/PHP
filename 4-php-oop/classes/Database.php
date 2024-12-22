<?php
class Database
{
    protected $conn;
    public function __construct()
    {
        $serverName = "localhost";
        $username = "hha";
        $password = "hanhtunaung97";
        $dbName = "wad_school";
        return $this->conn = new mysqli($serverName, $username, $password, $dbName);
    }

    public function __destruct()
    {
        return $this->conn->close();
    }
}

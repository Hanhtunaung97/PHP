<?php

class Db
{
    private $conn;
    public function __construct()
    {
        $serverName = "localhost";
        $username = "hha";
        $password = "hanhtunaung97";
        $dbName = "wad_school";
        return $this->conn = new mysqli($serverName, $username, $password, $dbName);
    }

    public function first($sql)
    {
        $query = $this->conn->query($sql);
        $row = $query->fetch_object();
        return $row;
    }
    public function all($sql)
    {
        $query = $this->conn->query($sql);
        $rows = [];
        while ($row = $query->fetch_object()) {
            array_push($rows, $row);
        }
        return $rows;
    }

    public function __destruct()
    {
        return $this->conn->close();
    }
}

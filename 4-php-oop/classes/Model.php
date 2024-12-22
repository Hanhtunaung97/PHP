<?php

class Model extends Database
{
    private $rawSql = "";
    protected $table;
    public function select(mixed $columns = "*")
    {
        $current = is_array($columns) ? implode(",", $columns) : $columns;
        $this->rawSql .= " SELECT $current FROM $this->table";
        return $this;
    }
    public function where($key, $operator, $value)
    {
        $current = strpos($this->rawSql, "WHERE") ? "AND" : "WHERE";
        $this->rawSql .= " $current $key $operator $value";
        return $this;
    }
    public function orderBy($key, $sort = "ASC")
    {
        $current = strpos($this->rawSql, "ORDER BY") ? "," : "ORDER BY";
        $this->rawSql .= " $current $key $sort";
        return $this;
    }
    public function limit($offset = 0, $limit = 5)
    {
        if (!strpos($this->rawSql, "LIMIT")) {

            $this->rawSql .= " LIMIT $offset,$limit";
        }
        return $this;
    }
    public function sql()
    {
        return $this->rawSql;
    }
    public function first()
    {
        $query = $this->conn->query($this->rawSql);
        $row = $query->fetch_object();
        return $row;
    }
    public function all()
    {
        $query = $this->conn->query($this->rawSql);
        $rows = [];
        while ($row = $query->fetch_object()) {
            array_push($rows, $row);
        }
        return $rows;
    }
}

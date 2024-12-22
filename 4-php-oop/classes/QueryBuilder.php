<?php

class QueryBuilder
{
    private $rawSql = "";
    private $table;

    public function __construct($table)
    {
        $this->table = $table;
    }

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
}

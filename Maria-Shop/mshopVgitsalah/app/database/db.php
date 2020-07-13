<?php
function printIt($value)
{
    echo "<pre>", print_r($value), "</pre>";
}

session_start();

class User extends DB
{

    public function executeQuery($sql, $data)
    {
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);
        $value = array_values($data);
        $type = str_repeat('s', count($value));
        $stmt->bind_param($type, ...$value);
        $stmt->execute();
        return $stmt;
    }
    public function addUser($table, $data)
    {
        $conn = $this->connect();
        $sql = "INSERT INTO $table SET ";

        $i = 0;

        foreach ($data as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " $key = ?";
            } else {
                $sql = $sql . ", $key = ?";
            }
            $i++;
        }

        $stmt = $conn->prepare($sql);
        $value = array_values($data);
        $type = str_repeat('s', count($value));
        $stmt->bind_param($type, ...$value);
        $stmt->execute();

        $id = $stmt->insert_id;
        return $id;
    }


    public function login($table, $condition)
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM $table";
        $i = 0;
        foreach ($condition as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $sql = $sql . " LIMIT 1";

        $stmt = $conn->prepare($sql);
        $value = array_values($condition);
        $type = str_repeat('s', count($value));
        $stmt->bind_param($type, ...$value);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
    }
}

class Category extends DB
{
    public function executeQuery($sql, $data)
    {
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);
        $value = array_values($data);
        $type = str_repeat('s', count($value));
        $stmt->bind_param($type, ...$value);
        $stmt->execute();
        return $stmt;
    }
    public function addCategory($table, $data)
    {
        $conn = $this->connect();
        $sql = "INSERT INTO $table SET ";

        $i = 0;

        foreach ($data as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " $key = ?";
            } else {
                $sql = $sql . ", $key = ?";
            }
            $i++;
        }

        $stmt = $conn->prepare($sql);
        $value = array_values($data);
        $type = str_repeat('s', count($value));
        $stmt->bind_param($type, ...$value);
        $stmt->execute();

        $id = $stmt->insert_id;
        return $id;
    }

    public function update($table, $id, $data)
    {
        

        $sql = "UPDATE $table SET ";

        $i = 0;
        foreach ($data as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " $key=?";
            } else {
                $sql = $sql . ", $key=?";
            }
            $i++;
        }

        $sql = $sql . " WHERE id=?";

        $data['idC'] = $id;

        $stmt = $this->executeQuery($sql, $data);

        return $stmt->affected_rows;
    }
}

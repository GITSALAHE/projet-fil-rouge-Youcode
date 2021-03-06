<?php
function printIt($value)
{
    echo "<pre>", print_r($value), "</pre>";
}

session_start();

class CRUD extends DB
{
    public function selectOne($table, $condition)
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
        $stmt = $this->connect();
        $stmt = $conn->prepare($sql);
        $value = array_values($condition);
        $type = str_repeat('s', count($value));
        $stmt->bind_param($type, ...$value);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
    }

    public function selectAll($table, $condition = [])
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM $table";
        if (empty($condition)) {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        } else {
            $i = 0;
            foreach ($condition as $key => $value) {
                if ($i === 0) {
                    $sql = $sql . " WHERE $key=?";
                } else {
                    $sql = $sql . " AND $key=?";
                }
                $i++;
            }
            $stmt = $conn->prepare($sql);
            $value = array_values($condition);
            $type = str_repeat('s', count($value));
            $stmt->bind_param($type, ...$value);
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }
    }

    public function create($table, $data)
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
    public function update($table, $id, $data, $idName)
    {
        $conn = $this->connect();
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

        $sql = $sql . " WHERE $table . $idName=?";
        $data['$idName'] = $id;
        $stmt = $this->executeQuery($sql, $data);
        return $stmt->affected_rows;
    }
    public function delete($table, $idName, $id)
    {
        $conn = $this->connect();
        $sql = "DELETE FROM $table WHERE $idName=?";
        $stmt = $this->executeQuery($sql, ['$idName' => $id]);
        return $stmt->affected_rows;
    }
}

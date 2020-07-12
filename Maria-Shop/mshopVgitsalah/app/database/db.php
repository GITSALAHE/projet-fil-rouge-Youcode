<?php 

session_start();

class User extends DB {

    public function addUser($table, $data)
    {
        $conn = $this->connect();
        $sql = "INSERT INTO $table SET ";

        $i = 0;

        foreach($data as $key => $value){
            if($i === 0){
                $sql = $sql . " $key = ?";
                else{
                    $sql = $sql . ", $key = ?";
                }
                $i++;
            }
        }
        $stmt = $conn->prepare($sql);
        $value = array_values($data);
        $type = str_repeat('s', count($value));
    }



}
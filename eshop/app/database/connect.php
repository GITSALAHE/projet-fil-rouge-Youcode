<?php

class DB
{

    private $servername;
    private $username;
    private $password;
    private $dbname;


    public function connect()
    {

        $this->servername = "blxzzaz6t2c290cvsz4z-mysql.services.clever-cloud.com";
        $this->username = "uepfs4dfyza3lumv";
        $this->password = "Cydg8T8guFk15R3t7djk";
        $this->dbname = "blxzzaz6t2c290cvsz4z";


        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        return $conn;
    }
}

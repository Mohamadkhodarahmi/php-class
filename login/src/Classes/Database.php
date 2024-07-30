<?php

namespace Nobody\Login\src\Classes;

class Database
{
    public  $connection;
    public function __construct()
    {

        $sb_host = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "shop";

        $this->connection = new \mysqli($sb_host, $db_username, $db_password, $db_name);

        if ($this->connection->connect_error) {
            die("connection failed" . $this->connection->connect_error);
        }
    }

//    public function getUser()
//    {
//        return $this->connection->query('SELECT * FROM users');
//    }
}
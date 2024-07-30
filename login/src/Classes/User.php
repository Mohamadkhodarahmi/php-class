<?php

namespace Nobody\Login\Classes;

class User
{
    public $connection;
    public $name;
    public $username;
    public $email;
    public $password;

    public function __construct($db)
    {
        $this->connection = $db;
    }

    public function register()
    {
        if ($this->isexist()) {
            setcookie('exist');
            return false;
        }
        $name = $this->name;
        $username = $this->username;
        $password = $this->password;
        $email = $this->email;

        $query = "INSERT INTO users (name,username,email,password) VALUES ('$name','$username','$email','$password')";
        if ($this->connection->query($query)) {
            setcookie('success');
            return true;
        }
        return false;
    }

    public function isexist()
    {
        $email = $this->email;
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = $this->connection->query($query);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function errors()
    {
        $error =[];
        if (empty($this->name)) {
            $error[] = 'name is requierd';
        }
        if (empty($this->username)) {
            $error[] = 'username is requird';
        }
        if (empty($this->email)) {
            $error[] = 'email is requird';
        }
        if (empty($this->password)) {
            $error[] = 'password is requird';
        }elseif(strlen($this->password < 3)){
            $error[] = 'pass must greater than 3';
        }
        return $error;
    }
}
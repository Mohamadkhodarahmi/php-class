<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/Classes/Database.php';
require_once __DIR__ . '/Classes/User.php';

$db = new Nobody\Login\src\classes\Database();
//$db->getUser()->fetch_all();
$connection = $db->connection;


$user = new \Nobody\Login\Classes\User($connection);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user->name = $_POST['name'];
    $user->username = $_POST['username'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];

    $error = $user->errors();
    if (empty($error)){
        if ($user->register()) {
            echo 'sucsses';
            exit();
        } else {
//            header('Location:../index.php');
            echo 'failed';
        }

    }
    else{
        foreach ($error as $erro){
            echo $erro ;
           echo PHP_EOL;
        }
    }
}


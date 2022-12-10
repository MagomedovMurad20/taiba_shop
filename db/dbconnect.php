<?php

//Реализовать подключение к бд при Опенсервере и Докере

$user = 'root';
$pass = 'root';
try {

    $conn = new PDO('mysql:host=localhost;dbname=taiba', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

switch (true) {
    case $conn === true:
        //Для  Докера
        $conn = new PDO('mysql:host=db;dbname=murad', 'murad', 'murad');
        break;
    default:
        //     //Для Опенсервера
        $conn = new PDO('mysql:host=localhost;dbname=taiba', 'root', 'root');
        break;
}

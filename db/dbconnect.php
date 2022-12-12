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
    default:
        //Для  Докера
        $conn = new PDO('mysql:host=db;dbname=taiba', 'root', 'root');
        break;
    case $conn !== true:
        //Для Опенсервера
        $conn = new PDO('mysql:host=localhost;dbname=taiba', 'root', 'root');
        break;
}

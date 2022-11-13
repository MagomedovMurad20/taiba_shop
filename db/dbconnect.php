<?php
//Реализовать подключение к бд при Опенсервере и Докере
$user='murad';
$pass='murad';
try {

    $conn = new PDO('mysql:host=db;dbname=murad', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
};

if($conn!==true) try {

    $conn = new PDO('mysql:host=db;dbname=murad', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
};
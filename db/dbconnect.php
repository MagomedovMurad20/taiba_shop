<?php

//Реализовать подключение к бд при Опенсервере и Докере

//Для Докера


// $user='murad';
// $pass='murad';
// try {

//     $conn = new PDO('mysql:host=db;dbname=murad', $user, $pass);
// } catch (PDOException $e) {
//     print "Error!: " . $e->getMessage() . "<br/>";
//     die();
// }
//Для ОпенСрвр
$user='root';
$pass='root';
try {

    $conn = new PDO('mysql:host=localhost;dbname=taiba', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

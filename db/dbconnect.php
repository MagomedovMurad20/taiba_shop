<?php

//Реализовать подключение к бд при Опенсервере и Докере




switch (true) {
    default:
        //Для  Докера
        $host = "db";
        $user = "root";
        $pass = "root";
        $db_name = "taiba";
        break;
    case $conn !== true:
        //Для Опенсервера
        $host = "db";
        $user = "root";
        $pass = "root";
        $db_name = "taiba";
        break;
}

$connection = mysqli_connect($host, $user, $pass, $db_name);

if (mysqli_connect_errno()) {
    die("Data Base connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
} else {
    // echo "Connection = success!\n" . mysqli_get_host_info($connection) . "<br />";
}

mysqli_query($connection, "SET NAMES utf8");

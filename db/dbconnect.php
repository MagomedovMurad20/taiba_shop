<?php
//for Docker
// $host = "db";
// $user = "murad";
// $pass = "murad";
// $db_name = "murad";

//for OpenServer
$host = "localhost";
$user = "root";
$pass = "root";
$db_name = "taiba";
$connection = mysqli_connect($host, $user, $pass, $db_name);

if (mysqli_connect_errno()) {
    die("Data Base connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
} else {
    // echo "Connection = success!\n" . mysqli_get_host_info($connection) . "<br />";
}

mysqli_query($connection, "SET NAMES utf8");

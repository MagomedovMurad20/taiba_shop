<?php
include_once('dbconnect.php');
echo "<br/>";

$querycheck='SELECT * from `users`';
$query_result=$conn->query($querycheck);

if ($query_result !== FALSE)
{
echo "table exist";
} else
{
    $conn->query('CREATE TABLE users (
        id int(11) AUTO_INCREMENT,
        email varchar(50) NOT NULL,
        pass varchar(50) NOT NULL,
        PRIMARY KEY(id)
    )');}


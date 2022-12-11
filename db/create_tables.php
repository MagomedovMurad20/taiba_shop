<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");

$querycheck = 'SELECT * from `users`';
$query_result = $conn->query($querycheck);

if ($query_result !== FALSE) {
    echo "table users exist";
    echo "<br/>";
} else {
    $conn->query('CREATE TABLE users (
        id int(11) AUTO_INCREMENT,
        email varchar(50) NOT NULL,
        pass varchar(50) NOT NULL,
        PRIMARY KEY(id)
    )');
    echo "table users created";
}
$querycheck = 'SELECT * from `products`';
$query_result = $conn->query($querycheck);

if ($query_result !== FALSE) {
    echo "table products exist";
} else {
    $conn->query('CREATE TABLE users (
        id int(11) AUTO_INCREMENT,
        title varchar(30) NOT NULL,
        description varchar(300) NOT NULL,
        price int(10) NOT NULL,
        img longblob NOT NULL,
        category_id int(10) DEFAULT NULL
    )');
    echo "table products created";
}

<?php
include_once('../db/dbconnect.php');

$sql = ("INSERT INTO `products` (names, descriptions, price) VALUES('Product 2', 'Some random description ', '16')");

$stmt = $conn->query($sql);


<?php
include_once('../db/dbconnect.php');

$sql = ("INSERT INTO `products` (names, descriptions, price) VALUES('Product 1', 'Some random description', '15')");

$stmt = $conn->query($sql);

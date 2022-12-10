<?php
require_once("./includes/logic/cart/db.php");
session_start();
$category_id;

switch ($page) {
    case "kurtki":
        $category_id = 'LIKE 2';
        break;
    case "platya":
        $category_id = 'LIKE 1';
        break;
    case "trikotaj":
        $category_id = 'LIKE 3';
        break;
    case "/":
        $category_id = "";
        break;
}

$sql = "SELECT * FROM `products` WHERE `category_id`  $category_id";
$select = $_POST['select'];
switch ($select) {
    case "a_z":
        $sql = "SELECT * FROM `products` WHERE `category_id`  $category_id ORDER BY `title` ";
        break;
    case "z_a":
        $sql = "SELECT * FROM `products` WHERE `category_id`  $category_id ORDER BY `title` DESC";
        break;
    case "priceMax":
        $sql = "SELECT * FROM `products` WHERE `category_id`  $category_id ORDER BY `price` DESC";
        break;

    case "priceMin":
        $sql = "SELECT * FROM `products` WHERE `category_id`  $category_id ORDER BY `price`  ";
        break;
}





$req = mysqli_query($connection, $sql);
$data_from_db = [];

while ($result = mysqli_fetch_assoc($req)) {
    $data_from_db[] = $result;
}

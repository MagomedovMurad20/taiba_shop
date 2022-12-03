<?php
require_once("./includes/logic/cart/db.php");
include_once("./includes/html/formes/select_product.php");



$sql = "SELECT * FROM `products`";
$select = $_POST['select'];
switch ($select) {
    case "a_z":
        $sql = "SELECT * FROM `products`  ORDER BY `title` ";
        break;
    case "z_a":
        $sql = "SELECT * FROM `products`  ORDER BY `title` DESC";
        break;
    case "priceMax":
        $sql = "SELECT * FROM `products`  ORDER BY `price` DESC";
        break;

    case "priceMin":
        $sql = "SELECT * FROM `products`  ORDER BY `price`  ";
        break;
}
$req = mysqli_query($connection, $sql);
$data_from_db = [];

while ($result = mysqli_fetch_assoc($req)) {
    $data_from_db[] = $result;
}

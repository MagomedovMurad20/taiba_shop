<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/logic/cart/db.php");

session_start();

if (isset($_SESSION['cart_list'])) {
	echo "Корзина: " . count($_SESSION['cart_list']) . " товара";
}


// $query = "SELECT * FROM `products`";
// $req = mysqli_query($connection, $query);
// $data_from_db = [];

// while ($result = mysqli_fetch_assoc($req)) {
// 	$data_from_db[] = $result;
// }

# var_dump($data_from_db);
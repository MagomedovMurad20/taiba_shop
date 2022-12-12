<?php
session_start();

if (isset($_SESSION['cart_list'])) {
	echo "Корзина: " . count($_SESSION['cart_list']) . " товара";
}

// require_once "db.php";
require_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");


if (isset($_GET['id'])) {
	$query = "SELECT * FROM `products` WHERE id=" . $_GET['id'];

	$req = mysqli_query($connection, $query);
	$current_product = mysqli_fetch_assoc($req);
	// var_dump($current_product);

	if (empty($current_product)) {
		header("Location: 404.php");
	}
}

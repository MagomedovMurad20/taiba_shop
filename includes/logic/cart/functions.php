<?php
// require_once "/includes/logic/cart/db.php";
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/logic/cart/db.php");

function get_product_by_id($id)
{
	global $connection;

	$query = "SELECT * FROM `products` WHERE id=" . $id;
	$req = mysqli_query($connection, $query);
	$resp = mysqli_fetch_assoc($req);

	return $resp;
}

function get_products_for_recomend($page)
{
	global $connection;
	$query = "SELECT * FROM `products`";
	$req = mysqli_query($connection, $query);
	$resp = mysqli_fetch_assoc($req);

	return $resp;
}

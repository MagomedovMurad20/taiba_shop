<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");

session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/html/templates/small_cart.php");

if (isset($_SESSION['cart_list'])) {
	echo "Корзина: " . count($_SESSION['cart_list']) . " товара";
	echo " ";
}

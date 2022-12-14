<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");

session_start();

if (isset($_SESSION['cart_list'])) {
	echo "Корзина: " . count($_SESSION['cart_list']) . " товара";
	echo " ";
} ?>

<a href="#" onclick="cartOpen();">
	В корзину
</a>
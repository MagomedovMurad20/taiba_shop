<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/logic/cart/functions.php");


if (isset($_GET['delete_id']) && isset($_SESSION['cart_list'])) {
	foreach ($_SESSION['cart_list'] as $key => $value) {
		if ($value['id'] == $_GET['delete_id']) {
			unset($_SESSION['cart_list'][$key]);
		}
	}
}


if (isset($_GET['product_id']) && !empty($_GET['product_id'])) {

	$current_added_product = get_product_by_id($_GET['product_id']);

	// ...
	if (!empty($current_added_product)) {

		if (!isset($_SESSION['cart_list'])) {
			$_SESSION['cart_list'][] = $current_added_product;
		}

		$product_check = false;

		if (isset($_SESSION['cart_list'])) {
			foreach ($_SESSION['cart_list'] as $value) {
				if ($value['id'] == $current_added_product['id']) {
					$product_check = true;
				}
			}
		}

		// header('Content-type: text/html; charset=utf-8');
		// echo "<pre>";
		// var_dump($_SESSION);

		if (!$product_check) {
			$_SESSION['cart_list'][] = $current_added_product;
		}

		ob_start();
		$new_url = $_SERVER['HTTP_REFERER']; //_GET['page'];
		header('Location: ' . $new_url);
		ob_end_flush();
		exit();
	} else {
		header("Location: 404.php");
	}
}
//todo сделать рекоменд товары

<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/logic/cart/cart.php";
$absolutePath = str_replace('\\', '/', $path);
require_once($absolutePath);
$path2 = $_SERVER['DOCUMENT_ROOT'] . "/includes/html/header.php";
$absolutePath2 = str_replace('\\', '/', $path2);
require_once($absolutePath2);
$path3 = $_SERVER['DOCUMENT_ROOT'] . "/includes/html/templates/cart.php";
$absolutePath3 = str_replace('\\', '/', $path3);
require_once($absolutePath3);

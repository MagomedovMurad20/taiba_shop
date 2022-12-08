<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/logic/cart/cart.php";
$absolutePath = str_replace('\\', '/', $path);
require_once($absolutePath);
require_once("./includes/html/header.php");
require_once "./includes/html/templates/cart.php";
require_once("./includes/html/header.php");

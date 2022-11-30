<?php
require_once("./includes/logic/cart/catalog.php");

$query = "SELECT * FROM `products` WHERE `title` LIKE '%плать%'";

$req = mysqli_query($connection, $query);
$data_from_db = [];

while ($result = mysqli_fetch_assoc($req)) {
    $data_from_db[] = $result;
}

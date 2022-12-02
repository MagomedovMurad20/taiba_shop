<?php
require_once("./includes/logic/cart/db.php");


$sql = "SELECT * FROM `products` WHERE `category_id` LIKE '2'";
$select = $_POST['select'];
switch ($select) {
    case "a_z":
        $sql = "SELECT * FROM `products` WHERE `title` LIKE '%куртк%' ORDER BY `title` ";
        break;
    case "z_a":
        $sql = "SELECT * FROM `products` WHERE `title` LIKE '%куртк%' ORDER BY `title` DESC";
        break;
    case "priceMax":
        $sql = "SELECT * FROM `products` WHERE `title` LIKE '%куртк%' ORDER BY `price`";
        break;

    case "priceMin":
        $sql = "SELECT * FROM `products` WHERE `title` LIKE '%куртк%' ORDER BY `price` DESC ";
        break;
}
$req = mysqli_query($connection, $sql);
$data_from_db = [];

while ($result = mysqli_fetch_assoc($req)) {
    $data_from_db[] = $result;
}


?>

<form action="" method="post">
    <select name='select'>
        <option value='a_z' selected>А-Б</option>
        <option value='z_a'>Б-А</option>
        <option value='priceMax'>по цене (дороже)</option>
        <option value='priceMin'>по цене (дешевле)</option>
    </select>
    <input class="dropbtn" type='submit' name='submit' value='отсортировать'>
</form>
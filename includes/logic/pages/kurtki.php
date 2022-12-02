<?php
require_once("./includes/logic/cart/db.php");


$sql = "SELECT * FROM `products` WHERE `title` LIKE '%куртк%'";
$select = $_POST['select'];
switch ($select) {
    case "a_z":
        $sql = "SELECT * FROM `products` WHERE `title` LIKE '%куртк%'";
        break;
    case "z_a":
        $sql = "SELECT * FROM `products` WHERE `title` LIKE '%плать%'";
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
        <option value='a_z' selected>куртки</option>
        <option value='z_a'>платья</option>
        <option value='priceMax'>по цене (дороже)</option>
        <option value='priceMin'>по цене (дешевле)</option>
    </select>
    <input class="dropbtn" type='submit' name='submit' value='отсортировать'>
</form>
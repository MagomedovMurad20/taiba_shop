<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/html/formes/adminform.php");


if ($_POST['email'] !== '' || $_POST['password'] !== '') {
    require_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");








    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $stmt = $connection->prepare("INSERT INTO `products` (title, description, price, img, category_id) VALUES  (?,?,?,?,?)");
    $stmt->bind_param('ssibi', $title, $desc, $price, $img, $category_id);



    $title = $_POST["title"];
    $desc = $_POST["description"];
    $price = $_POST["price"];
    $img = file_get_contents($_FILES['img']['tmp_name']);
    $category_id = $_POST['category_id'];
    $stmt->execute();

    printf("строк добавлено: %d.\n", $stmt->affected_rows);
} else {
    echo "cho";
}

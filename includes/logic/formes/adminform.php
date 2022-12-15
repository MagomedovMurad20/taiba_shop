<?php


if ($_POST['ttle'] == '') {
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/html/formes/adminform.php");
    echo "cho";
} else {
    require_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");
    $img = "netimg";
    if (is_uploaded_file($_FILES['img']['tmp_name'])) {
        $img = file_get_contents($_FILES['img']['tmp_name']);
    }
    $title = $_POST["title"];
    $desc = $_POST["description"];
    $price = $_POST["price"];
    $category_id = $_POST['category_id'];

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $stmt = $connection->prepare("INSERT INTO `products` (title, description, price, img, category_id) VALUES  (?,?,?,?,?)");
    $stmt->bind_param('ssibi', $title, $desc, $price, $img, $category_id);



    $stmt->execute();

    printf("строк добавлено: %d.\n", $stmt->affected_rows);
}

<?php
session_start();

if (isset($_SESSION['cart_list'])) {
    echo "Корзина: " . count($_SESSION['cart_list']) . " товара";
}

require_once "db.php";

if (isset($_GET['id'])) {
    $query = "SELECT * FROM `product` WHERE id=" . $_GET['id'];

    $req = mysqli_query($connection, $query);
    $current_product = mysqli_fetch_assoc($req);
    // var_dump($current_product);

    if (empty($current_product)) {
        header("Location: 404.php");
    }
}

?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <a href="catalog.php">В каталог</a>

    <h1>
        <?php echo $current_product['name'] ?>
    </h1>

    <p>
        <?php echo $current_product['desc'] ?>
    </p>

    <p><strong>
            <?php echo $current_product['price'] ?> рубликов
        </strong></p>

    <a href="order.php?title=<?php echo $current_product['name'] ?>">Купить в 1 клик</a>
    <br>
    <a href="cart.php?course_id=<?php echo $current_product['id'] ?>">Добавить в корзину</a>


</body>

</html>
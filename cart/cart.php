<?php
session_start();


require_once "db.php";
require_once "functions.php";


if (isset($_GET['delete_id']) && isset($_SESSION['cart_list'])) {
    foreach ($_SESSION['cart_list'] as $key => $value) {
        if ($value['id'] == $_GET['delete_id']) {
            unset($_SESSION['cart_list'][$key]);
        }
    }
}


if (isset($_GET['product_id']) && !empty($_GET['product_id'])) {

    $current_added_course = get_product_by_id($_GET['product_id']);

    // ...
    if (!empty($current_added_course)) {

        if (!isset($_SESSION['cart_list'])) {
            $_SESSION['cart_list'][] = $current_added_course;
        }


        $course_check = false;

        if (isset($_SESSION['cart_list'])) {
            foreach ($_SESSION['cart_list'] as $value) {
                if ($value['id'] == $current_added_course['id']) {
                    $course_check = true;
                }
            }
        }


        if (!$course_check) {
            $_SESSION['cart_list'][] = $current_added_course;
        }
    } else {
        header("Location: 404.php");
    }
}

// var_dump($_SESSION);




?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <a href="index.php">На главную</a>

    <h1>Корзина</h1>

    <?php if (isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) != 0) : ?>

        <ul>
            <?php foreach ($_SESSION['cart_list'] as $product) : ?>

                <li>
                    <?php
                    echo '<img  width=60px src="data:image/jpeg;base64,' . base64_encode($product['img']) . '" />';
                    ?>
                    <?php echo $product['name']; ?> |
                    <?php echo $product['price']; ?> руб. |
                    <a href="cart.php?delete_id=<?php echo $product['id']; ?>">удалить</a>
                </li>

            <?php endforeach; ?>
        </ul>

    <?php else : ?>

        <p>
            Ваша корзина пуста
        </p>

    <?php endif; ?>


    <a href="index.php">Продолжить покупки</a>
    <br>
    <a href="order.php">Оформить заказ</a>

</body>

</html>
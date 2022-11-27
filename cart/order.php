<?php
session_start();

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Заказать</title>
</head>

<body>

    <h1>Заказ.</h1>

    <form>

        <?php if (isset($_GET['name'])) : ?>
            <p>Вы заказываете: <?php echo $_GET['name']; ?></p>
        <?php elseif (isset($_SESSION['cart_list'])) : ?>
            <ul>
                <?php foreach ($_SESSION['cart_list'] as $product) : ?>

                    <li><?php echo $product['name']; ?> | <?php echo $product['price']; ?> ru.</li>

                <?php endforeach; ?>
            </ul>

            <p>
                <a href="cart.php">Изменить заказ</a>
            </p>
        <?php endif; ?>


        <input type="text" placeholder="Name">
        <input type="text" placeholder="Mobile">
        <input type="submit">
    </form>

</body>

</html>
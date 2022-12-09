<div class="cart">
    <h1>Корзина</h1>

    <a href="../../../index.php">На главную</a>



    <?php

    if (isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) != 0) : ?>


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


    <a href="../../../index.php">Продолжить покупки</a>
    <br>
    <a href=".includes/logic/cart/order.php">Оформить заказ</a>
</div>
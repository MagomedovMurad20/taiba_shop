<div class="cart-popup-hide" id="cart-popup">

    <?php

    if (isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) != 0) : ?>


        <ul>
            <?php foreach ($_SESSION['cart_list'] as $product) : ?>

                <li>
                    <?php
                    echo '<img  width=60px src="data:image/jpeg;base64,' . base64_encode($product['img']) . '" />';
                    ?>
                    <?php echo $product['title']; ?> |
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


    <a href="/index.php">Продолжить покупки</a>
    <br>
    <a href="/includes/logic/cart/order.php">Оформить заказ</a>
    <br>
    <a href="/cart.php">В корзину</a>
</div>
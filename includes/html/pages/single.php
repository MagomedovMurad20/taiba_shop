<?php
require_once("./includes/html/header.php");

$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/logic/cart/single.php";
$absolutePath = str_replace('\\', '/', $path);
require_once($absolutePath);
?>
<div class="single">


    <p>
        <?php
        echo '<img  width=465px height=550px src="data:image/jpeg;base64,' . base64_encode($current_product['img']) . '" />';
        ?>
    </p>
    <div class="textsingle">
        <a href="../../../index.php">На главную</a>

        <h1>
            <?php echo $current_product['title'] ?>
        </h1>

        <p>
            <?php echo $current_product['description'] ?>
        </p>

        <p><strong>
                <?php echo $current_product['price'] ?> рубликов
            </strong></p>

        <a href="order.php?title=<?php echo $current_product['title'] ?>">Купить в 1 клик</a>
        <br>
        <a href="cart.php?course_id=<?php echo $current_product['id'] ?>">Добавить в корзину</a>


    </div>

</div>
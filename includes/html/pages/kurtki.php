<?php
require_once("./includes/logic/pages/kurtki.php");
?>

<div id="center">

    <?php foreach ($data_from_db as $product_item) : ?>

        <div class="product_item">
            <p>
                <?php
                echo '<img  width=265px height=350px src="data:image/jpeg;base64,' . base64_encode($product_item['img']) . '" />';
                ?>
            </p>
            <h2>
                <?php echo $product_item['title'] ?>
            </h2>

            <p>
                <?php echo $product_item['description'] ?>
            </p>


            <p><strong>
                    <?php echo $product_item['price'] ?> rur
                </strong></p>

            <a href="./includes/logic/cart/single.php?id=<?php echo $product_item['id'] ?>">
                Подробнее
            </a>

            <a href="./includes/logic/cart/cart.php?product_id=<?php echo $product_item['id'] ?>">
                В корзину
            </a>
        </div>

    <?php endforeach; ?>

</div>
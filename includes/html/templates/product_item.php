<div id="center">

    <?php

    foreach ($data_from_db as $product_item) : ?>

        <div class="product_item">

            <?php
            echo '<img  width=265px height=345px src="data:image/jpeg;base64,' . base64_encode($product_item['img']) . '" />';
            ?>

            <h2>
                <?php echo $product_item['title'] ?>
            </h2>

            <p>
                <?php echo $product_item['description'] ?>
            </p>


            <p><strong>
                    <?php echo $product_item['price'] ?> rur
                </strong></p>

            <a href="/single.php?id=<?php echo $product_item['id'] ?>">
                Подробнее
            </a>

            <a href="#?product_id=<?php echo $product_item['id'] ?>" onclick="cartOpen();">
                В корзину
            </a>
        </div>

    <?php endforeach; ?>

</div>
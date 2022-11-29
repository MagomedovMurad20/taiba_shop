<?php
require_once("./cart/catalog.php")
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>


<body>

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

                <a href="cart/single.php?id=<?php echo $product_item['id'] ?>">
                    Подробнее
                </a>

                <a href="cart/cart.php?product_id=<?php echo $product_item['id'] ?>">
                    В корзину
                </a>
            </div>

        <?php endforeach; ?>

    </div>

</body>
<style>
    body {
        font-family: Tahoma, serif;
    }

    h1 {
        text-align: center;
    }

    #center {
        width: 900px;
        margin: 0 auto;
        overflow: hidden;
    }

    .product_item {
        width: 260px;
        height: fit-content;
        float: left;
        background: #424242;
        color: #fff;
        margin: 10px 10px 10px 10px;
        padding: 10px;

    }

    .product_item a {
        display: block;
        color: #424242;
        text-decoration: none;
        text-align: center;
        border: 1px solid #fff;
        padding: 10px 0;
        margin: 0 0 10px 0;
        background: #fff;
    }

    .product_item a:hover {
        background: transparent;
        color: #fff;
    }
</style>

</html>
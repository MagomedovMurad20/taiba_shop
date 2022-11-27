<?php
session_start();

if (isset($_SESSION['cart_list'])) {
    echo "Корзина: " . count($_SESSION['cart_list']) . " товара";
}

require_once "db.php";


$query = "SELECT * FROM `product`";
$req = mysqli_query($connection, $query);
$data_from_db = [];

while ($result = mysqli_fetch_assoc($req)) {
    $data_from_db[] = $result;
}

# var_dump($data_from_db);


?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>


<body>

    <h1>Welcome to taibashop</h1>

    <div id="center">

        <?php foreach ($data_from_db as $product_item) : ?>

            <div class="product_item">
                <h2>
                    <?php echo $product_item['name'] ?>
                </h2>

                <p>
                    <?php echo $product_item['desc'] ?>
                </p>
                <p>
                    <?php
                    echo '<img  width=265px src="data:image/jpeg;base64,' . base64_encode($product_item['img']) . '" />';
                    ?>


                </p>

                <p><strong>
                        <?php echo $product_item['price'] ?> rur
                    </strong></p>

                <a href="single.php?id=<?php echo $product_item['id'] ?>">
                    Подробнее
                </a>

                <a href="cart.php?product_id=<?php echo $product_item['id'] ?>">
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
        float: left;
        background: #424242;
        color: #fff;
        margin: 0 10px;
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
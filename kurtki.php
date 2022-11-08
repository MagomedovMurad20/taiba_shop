<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Куртки</title>
</head>

<body>
    <header>
    <?php
        $page = 'kurtki';
        require_once('header.php');          // задаем значение текущей страницы
    ?>
    </header>

    <div class="container content ">
        <div class="product-item">
            <img src="media/k1.jpg">
            <div class="product-list">
                <h3>Черный костюм(трикотаж)</h3>
                <span class="price">₽ 1999</span>
                <a href="" class="button">В корзину</a>
            </div>
        </div>
        <div class="product-item">
            <img src="media/k2.jpg">
            <div class="product-list">
                <h3>Черный костюм(трикотаж)</h3>
                <span class="price">₽ 1999</span>
                <a href="" class="button">В корзину</a>
            </div>
        </div>

        <div class="product-item">
            <img src="media/k3.jpg">
            <div class="product-list">
                <h3>Зеленый костюм(трикотаж)</h3>
                <span class="price">₽ 1999</span>
                <a href="" class="button">В корзину</a>
            </div>
        </div>
 </div>
    <footer class="top-menu" id="bottombar">
    <?php
        require_once('footer.php');   // подключаем footer                
                                        // инфу взял отсюда https://ru.stackoverflow.com/questions/472675/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B5-%D0%BC%D0%B5%D0%BD%D1%8E-%D0%BD%D0%B0-php-%D0%BF%D0%BE%D0%B4%D1%81%D0%B2%D0%B5%D1%82%D0%BA%D0%B0-%D1%82%D0%B5%D0%BA%D1%83%D1%89%D0%B5%D0%B9-%D0%BA%D0%BD%D0%BE%D0%BF%D0%BA%D0%B8-%D0%B2-%D0%BC%D0%B5%D0%BD%D1%8E
    ?>
    </footer>
</body>
<script src="js/script.js"></script>
</body>

</html>
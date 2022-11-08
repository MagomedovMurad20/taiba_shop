<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">

    <title>taiba-shop</title>
</head>

<body>
    <?php
        $page = 'index';            // задаем значение текущей страницы
        require_once('header.php');   // подключаем меню    // инфу взял отсюда https://ru.stackoverflow.com/questions/472675/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B5-%D0%BC%D0%B5%D0%BD%D1%8E-%D0%BD%D0%B0-php-%D0%BF%D0%BE%D0%B4%D1%81%D0%B2%D0%B5%D1%82%D0%BA%D0%B0-%D1%82%D0%B5%D0%BA%D1%83%D1%89%D0%B5%D0%B9-%D0%BA%D0%BD%D0%BE%D0%BF%D0%BA%D0%B8-%D0%B2-%D0%BC%D0%B5%D0%BD%D1%8E
        require_once('content.php');
        require_once('formfeedback.php');
        require_once('footer.php');
    ?>
</body>
<script src="js/script.js"></script>

</html>
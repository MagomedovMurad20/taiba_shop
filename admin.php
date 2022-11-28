<?php
$page = 'admin';
require_once("./includes/header.php"); ?>

<?php
if ($_POST['email'] == '' || $_POST['password'] == '') {
    echo '<h3>Загрузка товара</h3>
            <form method="post">
                <p>Название <br />
                    <input type="text" name="title" min="3"  autofocus required placeholder="Название товара" />
                </p>
                <p>Описание <br />
                    <input type="text" name="description" min="50" max="50" autofocus required placeholder="Описание товара" />
                </p>
                <p>Цена <br />
                    <input type="price" name="price" id="price" min="5" max="100" placeholder="3500" required/> руб.
                </p>
                <p>Фото <br />
                    <input type="file" name="img" id="img" required />
                </p>
                <input type="submit" value="Загрузить товар">
            </form>';
}

try {
    require_once './db/dbconnect.php';

    $sql = "INSERT INTO `products` (title, description, price, img) VALUES (?, ?, ?, ?)";
    // определяем prepared statement
    $stmt = $conn->prepare($sql);
    // привязываем параметры к значениям
    $rowsNumber = $stmt->execute(array(
        $_POST["title"],
        $_POST["description"],
        $_POST["price"],
        $_POST["img"]
    ));

    // если добавлена как минимум одна строка
    if ($rowsNumber > 0) {
        echo "товар успешно добавлен: 
        название=" . $_POST["title"]
            . "  описание= "  . $_POST["description"]
            . "цена=" . $_POST["price"]
            . "фото=" . $_POST["img"];
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
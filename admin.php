<?php
$page = 'admin';
require_once("./includes/html/header.php"); ?>

<?php
if ($_POST['email'] == '' || $_POST['password'] == '') {
    echo '<h3>Загрузка товара</h3>
            <form method="post" enctype="multipart/form-data">
                <p>Название <br />
                    <input type="text" name="title" min="3"  autofocus required"
                    placeholder="Название товара" />
                </p>
                <p>Описание <br />
                    <input type="text" name="description"
                     min="50" max="500" autofocus required
                     placeholder="Описание товара" />
                </p>
                <p>Цена <br />
                    <input type="number" name="price" id="price" 
                     required/> руб.
                </p>
                <p>Фото <br />
                    <input type="file" name="img" id="img"
                    accept=".jpg, .jpeg, .png" required />
                </p>
                <input type="submit" value="Загрузить товар">
            </form>';
}

try {
    require_once './db/dbconnect.php';


    $sql = "INSERT INTO `products` (title, description, price, img) VALUES (?, ?, ?, ?)";

    if (is_uploaded_file($_FILES['img']['tmp_name'])) {
        $img = file_get_contents($_FILES['img']['tmp_name']);
    }
    // определяем prepared statement
    $stmt = $conn->prepare($sql);
    // привязываем параметры к значениям
    $rowsNumber = $stmt->execute(array(
        $_POST["title"],
        $_POST["description"],
        $_POST["price"],
        $img
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


// $querycheck = 'SELECT * from `products`';
// $query_result = $conn->query($querycheck);

// if ($query_result !== FALSE) {
//     echo "table exist";
// } else {
//     $conn->query('CREATE TABLE products (
//         id int(11) AUTO_INCREMENT,
//         title varchar(50) NOT NULL,
//         description varchar(300) NOT NULL,
//         price varchar(10) NOT NULL,
//         img longblob NOT NULL,
//         PRIMARY KEY(id)
//     )');
// }
?>
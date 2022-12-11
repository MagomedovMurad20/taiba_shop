<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/html/formes/adminform.php");


if ($_POST['email'] !== '' || $_POST['password'] !== '') {

    try {
        $sql = "INSERT INTO `products` (title, description, price, img, category_id) VALUES (?, ?, ?, ?, ?)";

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
            $img,
            $_POST['category_id']
        ));


        // если добавлена как минимум одна строка
        if ($rowsNumber > 0) {
            echo "товар успешно добавлен: 
        название=" . $_POST["title"]
                . "  описание= "  . $_POST["description"]
                . "цена=" . $_POST["price"]
                . "фото=" . $_POST["img"];
        } else {
            echo "ko";
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }



    //todo закрывать соединение скл

    // $querycheck = 'SELECT * from `products`';
    // $query_result = $conn->query($querycheck);

    // if ($query_result !== FALSE) {
    // echo "table exist";
    // } else {
    // $conn->query('CREATE TABLE products (
    // id int(11) AUTO_INCREMENT,
    // title varchar(50) NOT NULL,
    // description varchar(300) NOT NULL,
    // price varchar(10) NOT NULL,
    // img longblob NOT NULL,
    // PRIMARY KEY(id)
    // )');
    // }
} else {
    echo "cho";
}

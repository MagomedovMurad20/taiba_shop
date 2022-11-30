<?php

require_once './includes/html/formes/signupform.php';
//require_once '../../../db/dbconnect.php';
require_once './db/dbconnect.php';



try {

    $sql = "INSERT INTO `users` (email, pass) VALUES (?, ?)";
    // определяем prepared statement
    $stmt = $conn->prepare($sql);
    // привязываем параметры к значениям
    $rowsNumber = $stmt->execute(array($_POST["email"], $_POST["password"]));

    // если добавлена как минимум одна строка
    if ($rowsNumber > 0) {
        echo "Пользователь успешно зарегистрирован: email=" . $_POST["email"] . "  password= " . $_POST["password"];
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}

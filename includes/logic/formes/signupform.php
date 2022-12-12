<?php

//require_once '../../../db/dbconnect.php';


if ($_POST['email'] == '' || $_POST['password'] == '') {
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/html/formes/signupform.php");
} else {
    require_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");


    try {

        $sql = "INSERT INTO `users` (email, pass) VALUES (?, ?)";
        // определяем prepared statement
        $stmt = $conn->prepare($sql);
        // привязываем параметры к значениям
        $rowsNumber = $stmt->execute(array($_POST["email"], md5($_POST["password"])));

        // если добавлена как минимум одна строка
        if ($rowsNumber > 0) {
            echo "Пользователь успешно зарегистрирован: email=" . $_POST["email"] . "  password= " . $_POST["password"];
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}

<?php

//генерируем соль;
function generateSalt()
{
    $salt = '';
    $saltLength = 8; // длина соли

    for ($i = 0; $i < $saltLength; $i++) {
        $salt .= chr(mt_rand(33, 126)); // символ из ASCII-table
    }

    return $salt;
};

if ($_POST['email'] == '' || $_POST['password'] == '') {
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/html/formes/signupform.php");
} else {
    // require_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");


    $email = $_POST["email"];
    $password = md5($salt . $_POST["password"]);
    $sql = "INSERT INTO `users` (email, pass) VALUES ('$email', '$password')";

    if ($connection->query($sql) === TRUE) {
        echo "Пользователь успешно зарегистрирован: email=" . $_POST["email"] . "  password= " . $_POST["password"];
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}

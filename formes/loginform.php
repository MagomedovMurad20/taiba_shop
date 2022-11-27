<?php

if ($_POST['email'] == '' || $_POST['password'] == '')
	require_once('./includes/loginform.php');
else {
	require_once('./db/dbconnect.php');
	$sql = "SELECT * FROM `users` WHERE email=:email AND pass=:pass"; //Формируем запрос без данных
	$stmt = $conn->prepare($sql);
	$rowsNumber = $stmt->execute(array(":email" => $_POST["email"], ":pass" => $_POST["password"]));
	$resultArray = $stmt->fetchAll();
	$username = $_POST["email"];
	if (count($resultArray) > 0) { //Если база вернула 1 значение, значит и логин и пароль совпали. отлично
		echo "$username  Добро пожаловать в личный кабинет!";
		$_SESSION['user'] = $result[0]; //сохраняем обьект пользователя в сессии

	} else
		echo '<meta charset="UTF-8">Логин или пароль не верный или пользователь не существует';
}
?>
<?php

if ($_POST['email'] == '' || $_POST['password'] == '')
	require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/html/formes/loginform.php");
else {
	require_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");


	$password = $_POST["password"];
	$email = $_POST["email"];
	$sql = "SELECT * FROM `users` WHERE `email`= '$email' AND `pass`= '$password'";
	var_dump($sql);
	$result = $connection->query($sql);
	$user = $result->fetch_assoc(); // Конвертируем в массив
	if (count($user) > 0) {
		$new_url = 'admin.php';
		header('Location: ' . $new_url);
		exit();
	} else if (count($user) == 0) {
		echo "Логин или праоль введены неверно";
		exit();
	}

	$mysql->close();


	$req = mysqli_query($connection, $sql);
	if ($req === TRUE) {
	} else {
		echo '<meta charset="UTF-8">Логин или пароль не верный или пользователь не существует';
	}
	$connection->close();
}

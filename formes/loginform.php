<?php

	if ($_POST['email']=='' || $_POST['pass']=='') echo 
		'	<h3>Войти</h3>
				<form action="login.php" method="POST">
					<p>Логин
				    <input type="text" name="email" id="email"></p>
				    <p>Пароль
				    <input type="password" name="pass" id="pass"></p>
				    <input type="submit" id="button" value="Войти">
				</form>
				<br/>
				<a href="registration.php">
				<button>Если вы не зарегистрированы нажмите сюда</button>
			  	</a> 
';
	else{
		require_once('./db/dbconnect.php');
		$sql = "SELECT * FROM `users` WHERE email=:email AND pass=:pass";//Формируем запрос без данных
		$stmt = $conn->prepare($sql);
		$rowsNumber = $stmt->execute(array(":email"=>$_POST["email"], ":pass"=>$_POST["pass"]));
		$resultArray = $stmt->fetchAll();
		$username=$_POST["email"];
		if (count($resultArray)>0) {//Если база вернула 1 значение, значит и логин и пароль совпали. отлично
			echo "$username  Добро пожаловать в личный кабинет!"; 
			$_SESSION['user'] = $result[0];//сохраняем обьект пользователя в сессии
			
		}else echo '<meta charset="UTF-8">Логин или пароль не верный или пользователь не существует';
	}
?>
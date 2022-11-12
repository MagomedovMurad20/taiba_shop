<h3>Войти</h3>
	<form action="login.php" method="POST">
		<p>Ваш e-mail будет использоваться в качестве логина <br/>
		    <input type="email" name="email" id="email" 
			       pattern="\S+@[a-z]+.[a-z]+"  min="3" max="50" autofocus  required placeholder="mail@mail.ru"></p>
			<p>Пароль <br/>
			<input   type="password" name="password" id="password"
			         required pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])\S{6,}"
					 min="3" max="50"></p>
			<input type="submit" id="button" value="Войти">
	</form>
		<br/>
	<a href="registration.php">
	<button>Если вы не зарегистрированы нажмите сюда</button>
	</a> 
<h3>Зарегистрироваться</h3>
<form method="post">
    <p>Ваш e-mail будет использоваться в качестве логина <br/>
        <input type="email" name="email"  
        pattern="\S+@[a-z]+.[a-z]+"  min="3" max="50" autofocus  required placeholder="mail@mail.ru" />
    </p>
    <p>Пароль <br/>
        <input  type="password"  name="password" id="password"
                required pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])\S{6,}" min="5" max="100"
                placeholder="Цифры, буквы и символы"/>
    </p>
    <input  type="submit" value="Зарегистрироваться">
</form>
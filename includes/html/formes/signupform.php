<div class="ufive-login">

    <form method="post" id="loginform">
        <section id="feedback">
            <p>Ваш e-mail будет использоваться в качестве логина <br />
                <input type="email" name="email" pattern="\S+@[a-z]+.[a-z]+" min="3" max="50" autofocus required placeholder="mail@mail.ru" />
            </p>
            <p>Пароль <br />
                <input type="password" name="password" id="password" required pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])\S{6,}" min="5" max="100" placeholder="Цифры, буквы и символы" />
            </p>
            <input type="submit" value="Зарегистрироваться">
        </section>
    </form>
</div>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Exo+2&display=swap");

    .ufive-login {
        font-size: 62.5%;
        font-family: "Exo 2", sans-serif;
        font-weight: 600;
        width: 100%;
        height: 100%;

        top: 0;
        left: 0;
        visibility: visible;
    }

    .ufive-login section {
        background: #eee;
        margin: 60px auto 120px;
        border-top: 15px solid #393939;
        text-align: center;
    }

    .ufive-login section h1 {
        margin-bottom: 40px;
        font-size: 4em;
        text-transform: uppercase;
        font-family: "Exo 2", sans-serif;
        font-weight: 400;
        color: #393939;
    }

    .ufive-login form {
        width: 58.3333333333%;
        margin: 0 auto;
        color: #f3be81;
    }

    .ufive-login form .field {
        width: 100%;
        position: relative;
        margin-bottom: 15px;
        color: #f3be81;
    }

    .ufive-login form .field label {
        text-transform: uppercase;
        position: absolute;
        top: 0;
        left: 0;
        background: #393939;
        width: 100%;
        padding: 18px 0;
        font-size: 1.45em;
        letter-spacing: 0.075em;
        -webkit-transition: all 333ms ease-in-out;
        -moz-transition: all 333ms ease-in-out;
        -o-transition: all 333ms ease-in-out;
        -ms-transition: all 333ms ease-in-out;
        transition: all 333ms ease-in-out;
    }

    .ufive-login form .field label+span {
        opacity: 0;
        color: white;
        display: block;
        position: absolute;
        top: 12px;
        left: 7%;
        font-size: 2.5em;
        text-shadow: 1px 2px 0 #cd6302;
        -webkit-transition: all 333ms ease-in-out;
        -moz-transition: all 333ms ease-in-out;
        -o-transition: all 333ms ease-in-out;
        -ms-transition: all 333ms ease-in-out;
        transition: all 333ms ease-in-out;
    }

    .ufive-login form .field input[type="text"],
    form .field textarea {
        border: none;
        background: #393939;
        width: 80.5%;
        font-family: "Exo 2", sans-serif;
        margin: 0;
        padding: 18px 0;
        padding-left: 19.5%;
        color: #fff;
        font-size: 1.4em;
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }

    .ufive-login form .field input[type="number"]#price,
    .ufive-login form .field input[type="file"]#img,

    form .field textarea#msg {
        height: 12px;
        margin-bottom: 40px;
        resize: none;
        font-size: 10px;
        font-family: "Exo 2", sans-serif;
        -webkit-transition: all 333ms ease-in-out;
        -moz-transition: all 333ms ease-in-out;
        -o-transition: all 333ms ease-in-out;
        -ms-transition: all 333ms ease-in-out;
        transition: all 333ms ease-in-out;
    }



    .ufive-login form .field input[type="text"]:focus,
    form .field input[type="text"].focused,
    form .field textarea:focus,
    form .field textarea.focused {
        outline: none;
        color: #f3be81;
        font-family: "Exo 2", sans-serif;
    }

    .ufive-login form .field input[type="text"]:focus#msg,
    form .field input[type="text"].focused#msg,
    form .field textarea:focus#msg,
    form .field textarea.focused#msg {
        padding-bottom: 150px;
        font-size: 10px;
        font-family: "Exo 2", sans-serif;
    }

    .ufive-login form .field input[type="text"]:focus+label,
    form .field input[type="text"].focused+label,
    form .field textarea:focus+label,
    form .field textarea.focused+label {
        width: 18%;
        background: #393939;
        color: #fff;
    }

    .ufive-login form .field input[type="text"].focused+label,
    form .field textarea.focused+label {
        color: #fff;
    }

    .ufive-login form .field:hover label {
        width: 18%;
        background: #f3be81;
        color: #393939;
    }

    .ufive-login form input[type="submit"],
    .ufive-login form input[type="button"] {
        margin-top: 30px;
        background: #f3be81;
        color: #393939;
        border: none;
        text-transform: uppercase;
        position: relative;
        padding: 13px 50px;
        font-size: 1.4em;
        letter-spacing: 0.1em;
        font-family: "Exo 2", sans-serif;
        font-weight: 300;
        cursor: pointer;
        -webkit-transition: all 333ms ease-in-out;
        -moz-transition: all 333ms ease-in-out;
        -o-transition: all 333ms ease-in-out;
        -ms-transition: all 333ms ease-in-out;
        transition: all 333ms ease-in-out;
    }

    .ufive-login form input[type="submit"]:hover,
    .ufive-login form input[type="button"]:hover {
        background: #393939;
        color: #f3be81;
    }

    .ufive-login form input[type="submit"]:focus,
    .ufive-login form input[type="button"] {
        outline: none;
        background: #f3be81;
        color: #393939;
    }

    @media (max-width: 765px) {
        .ufive-login form {
            width: 100%;
        }

        .ufive-login section {
            width: 100%;
        }
    }
</style>
<?php
if ($_POST['name'] !== '' || $_POST['phone'] !== '') {
    $to = 'kurbtai@gmail.com';
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    // echo $to;
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $phone;
    echo $message;
    $mail = mail($to, $name, $phone, $message);
    // echo "<br>";

    // var_dump($mail);
}



?>

<div class="ufive-feedback" id="ufive-feedback">
    <section id="feedback">
        <a href="#navbar" class="feedback-close">ЗАКРЫТЬ</a>
        <h1>Форма заказа</h1>
        <form method="POST">

            <div class="field name-box">
                <input type="text" name="name" id="name" placeholder="Татьяна" maxlength="35" />
                <label for="name">Имя</label>
            </div>

            <div class="field phone-box">
                <input type="text" name="phone" id="phone" placeholder="+79887778899" required />
                <label for="phone">Телефон</label>
            </div>

            <div class="field msg-box">
                <textarea type="text" name="message" id="message" rows="4" maxlength="350" placeholder="Скопируйте ссылку на товар, напишите ваши дополнительные пожелания" required /></textarea>
                <label for="msg">Текст</label>
            </div>

            <input class="button" type="submit" value="Отправить" />

        </form>
    </section>
</div>


<script>
    function myFunction() {
        let popup = document.getElementById("ufive-feedback");
        if (popup.classList.contains("ufive-feedback")) {
            setTimeout(() => popup.classList.remove("ufive-feedback"))
        }
        setTimeout(() => popup.classList.add("ufive-feedback-show"), 10000) // If yes hide it after 10000 milliseconds

    }
</script>
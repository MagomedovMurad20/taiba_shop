<?php
$page = 'admin';
require_once("./includes/header.php"); ?>
<h3>Загрузка товара</h3>
<form method="post">
    <p>Название <br />
        <input type="text" name="text" pattern="" min="3" max="10" autofocus required placeholder="Название товара" />
    </p>
    <p>Описание <br />
        <input type="text" name="description" pattern="" min="50" max="50" autofocus required placeholder="Описание товара" />
    </p>
    <p>Цена <br />
        <input type="price" name="price" id="price" required pattern="" min="5" max="100" placeholder="3500" /> руб.
    </p>
    <input type="submit" value="Загрузить товар">
</form>
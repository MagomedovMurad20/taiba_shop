<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">

  <title>taiba-shop</title>
</head>

<header>
  <div id="top"></div>
  <nav class="top-menu" id="navbar">
    <ul class="menu-main">
      <li><a href="index.php?" <?php if (!$_GET['page'])
                                  echo 'class="current"' ?>>Главная</a></li>
      <li><a href="kurtki.php?category_id=2&page=kurtki" <?php if ($_GET['page'] == 'kurtki')
                                                            echo 'class="current"' ?>>Куртки</a></li>
      <li><a href="platya.php?category_id=1&page=platya" <?php if ($_GET['page'] == 'platya')
                                                            echo 'class="current"' ?>>Платья</a></li>
      <li><a href="trikotaj.php?category_id=3&page=trikotaj" <?php if ($_GET['page'] == 'trikotaj')
                                                                echo 'class="current"' ?>>Трикотаж</a></li>
      <li><a href="login.php?page=login" <?php if ($_GET['page'] == 'login')
                                            echo 'class="current"' ?>>Войти</a></li>
      <li>
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/logic/formes/form_select_product.php");
        ?>
      </li>
      <li>
        <a href="#ufive-feedback" onclick="feedBackOpen();">Связаться с нами</a>
      </li>
      <li>
        <a href="#" onclick="cartOpen();">

          <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/logic/cart/small_cart.php"); ?>
        </a>
      </li>
      <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/html/cart/cart_popup.php"); ?>

    </ul>

  </nav>

</header>

<body>



  <!-- <div class="dropdown">
        <form action="">
          <button class="dropbtn">Сортировать</button>
          <div class="dropdown-content">
            <a href="#">По убыванию цены</a>
            <a href="#">По возрастанию цены</a>
            <a href="#">По популярности</a>
          </div>
        </form>
      </div> -->
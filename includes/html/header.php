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
  <nav class="top-menu" id="navbar">
    <ul class="menu-main">
      <li><a href="index.php" <?php if ($page == '/')
                                echo 'class="current"' ?>>Главная</a></li>
      <li><a href="kurtki.php" <?php if ($page == 'kurtki')
                                  echo 'class="current"' ?>>Куртки</a></li>
      <li><a href="platya.php" <?php if ($page == 'platya')
                                  echo 'class="current"' ?>>Платья</a></li>
      <li><a href="trikotaj.php" <?php if ($page == 'trikotaj')
                                    echo 'class="current"' ?>>Трикотаж</a></li>
      <li><a href="login.php" <?php if ($page == 'signup')
                                echo 'class="current"' ?>>Войти</a></li>
      <li>
        <?php
        require_once("./includes/html/formes/select_product.php");
        ?>
      </li>
      <li>
        <a href="#ufive-feedback">Связаться с нами</a>
      </li>
    </ul>
  </nav>
</header>

<body>
  <?php
  require_once("./includes/html/formes/formfeedback.php");

  ?>



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
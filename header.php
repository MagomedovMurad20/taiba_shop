
<header> 
        <nav class="top-menu" id="navbar">
            <ul class="menu-main">
                <li><a href="index.php" <?php if($page == 'index') echo 'class="current"'?> >Главная</a></li>
                <li><a href="kurtki.php" <?php if($page == 'kurtki') echo 'class="current"'?> >Куртки</a></li>
                <li><a href="platya.php" <?php if($page == 'platya') echo 'class="current"'?> >Платья</a></li>
                <li><a href="trikotaj.php" <?php if($page == 'trikotaj') echo 'class="current"'?> >Трикотаж</a></li>
                <li><a href="auth.php" <?php if($page == 'auth') echo 'class="current"'?> >Войти</a></li>
                <div class="dropdown">
                    <button class="dropbtn">Сортировать</button>
                    <div class="dropdown-content">
                      <a href="#">По убыванию цены</a>
                      <a href="#">По возрастанию цены</a>
                      <a href="#">По популярности</a>
                    </div>
                  </div>
            </ul>
        </nav>
</header>

    <?php
        $page = 'корзина';
        require_once('includes/header.php');          // задаем значение текущей страницы
    ?>
<form id="form1" name="form1" method="post"  action=""><br>
<label><br>
<input type="hidden"  name="product_price" value="<?php echo $p['price']?>"  /><br>
<input type="hidden"  name="product_id" value="<?php echo $p['pid']?>" /><br>
<input type="hidden"  name="tocart" value="tocart" /><br>
<input type="submit"  name="Submit" value=”В корзину” /><br>
</label><br>
</form>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/db/dbconnect.php");

session_start();

if (isset($_SESSION['cart_list'])) { ?>

	<div class="small-cart">

		<a href="#" onclick="cartOpen();">
			<img src="/media/cart.jpg">
			Корзина: <?php echo count($_SESSION['cart_list']) ?> товара
		</a>
	</div>
<?php } ?>
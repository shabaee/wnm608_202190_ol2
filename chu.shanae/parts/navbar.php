<?php 

include_once "lib/php/functions.php";

?>
<header class="navbar">
    </div>

		<div class="container display-flex">
			<div class="flex-none">
			<div class="styletitle">Sonder</div>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-pills ">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Store</a></li>
					<li><a href="product_cart.php">
						<span>Cart</span>
						<span class="badge"><?= makeCartBadge(); ?></span>
				</a></ul>
			</nav>
			</div>
		</div>
	</header>
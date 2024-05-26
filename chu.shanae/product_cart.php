<?php
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
	$cart = getCart();
	$cart_items = getCartItems(); // Assuming this function fetches the cart items
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Cart</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h1>In Your Cart</h1>

		<?php

		if(count($cart_items)) { // Use $cart_items to check if the cart has items
			?>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft vertical-flex">
					<?= array_reduce($cart_items, 'cartListTemplate', '') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<?= cartTotals() ?>
					<div class="card-section">
			<a href="product_checkout.php" class="form-button">Checkout</a>
				</div>
				</div>
			</div>
		</div>
		<?php
		} else {
		?>
		<div class="card soft">
			<h2>There are no items in your cart.</h2>

		</div>
			<h3>Other Recommendations</h3>
			<?php recommendedAnything(6); ?>
		</div>
		<?php
		}
		?>
	</div>
	
</body>
</html>

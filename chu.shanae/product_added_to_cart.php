<?php
include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];
$cart_product = cartItemById($_GET['id']);

// print_p($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Added to Cart</title>
	<? include "parts/meta.php"; ?>
</head>
<body>
	<? include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>You addded <?= $product->name ?> to your cart.</h2>
			<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>
			<div class="display-flex">
				<div class="flex-none">
					<a href="product_list.php">Continue Shopping</a>
				</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">
					<a href="product_cart.php">Go to Cart</a>
				</div>
				
			</div>
		</div>
	</div>
	
</body>
</html>
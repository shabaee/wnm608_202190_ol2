<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (3,6,9)");



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

<?php include "parts/navbar.php"; ?>

	

                
	<div class="container">
		<h2>In Your Cart</h2>
	<div class="grid gap">
		<div class="col-xs-12 col-md-7">	
			<div class="card soft">
				<?= array_reduce($cart,'cartListTemplate') ?>
		</div>
    </div>
    <div class="col-xs-12 col-md-7">
    	<div class="card soft flat">
    		<div class="card-section">
    			<div class="flex-stretch"><strong>Sub Total</strong></div>
    			<div class="flex-none">&dollar;125.00</div>
 </div>
 	<div class="card-section display flex">
    			<div class="flex-stretch"><strong>Taxes</strong></div>
    			<div class="flex-none">&dollar;10.50</div>
 </div>
 	<div class="card-section display flex">
    			<div class="flex-stretch"><strong>Total</strong></div>
    			<div class="flex-none">&dollar;135.50</div>
 </div>
 <div class="card-section display flex">
 	<a href="product_checkout.php" class="default-button">Checkout</a>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>
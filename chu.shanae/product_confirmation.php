<?php

include_once "lib/php/functions.php";

resetCart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Confirmation</title>
	<? include "parts/meta.php" ?>
</head>
<body>
	<? include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h2>Thank You For Your Purchase!</h2>
			<p><a href="product_list.php">Continue Shopping</a></p>
		</div>
	</div>
	
</body>
</html>
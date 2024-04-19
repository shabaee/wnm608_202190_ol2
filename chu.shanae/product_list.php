<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
		<?php include "parts/meta.php"; ?>
</head>
<body>


<?php include "parts/navbar.php"; ?>


<div class="container">
	<div class="card soft">
		<h1>Shop All</h1>
		

		<?php

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

		$result = makeQuery(
			makeConn(),
			"
			SELECT *
			FROM `products`
			ORDER BY `date_create` DESC
			LIMIT 12
			"
		);

		echo "<div class='productlist grid gap'>",array_reduce($result, 'productListTemplate'), "</div>";


		?>
	</div>
</div>
	
</body>
</html>
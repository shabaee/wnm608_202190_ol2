<?php 
include_once "lib/php/functions.php";
include_once"parts/templates.php";

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sonder</title>
	<?php
		include "parts/meta.php";
	?>
</head>
<body>
	<?php
		include "parts/navbar.php";
	?>

	<div class="view-window" style="background-image: url(img/about.jpg);background-position: 0 100%;">
		<h2>Shop New Collection</h2>
	</div>
	<div class="container">
		<article class="article card soft">
			<img src="https://fashionista.com/.image/t_share/MjAwNjc5MzU1MTkyNDUyNDgy/marc-jacobs-heaven-bella-hadid-fall-2023.jpg" alt="" class="media-image">
		</article>
	</div>

	<div class="container">
		<h1>New In</h1>
		<?php recommendedCategory("accessories");?>
		<h1>Just Restocked</h1>
		<?php recommendedAnything(6);?>
	</div>

	
</body>
</html>


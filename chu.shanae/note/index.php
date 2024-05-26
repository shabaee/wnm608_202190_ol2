<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		echo "Hello World";
		echo "<div class='flex'> Hello World.</div>";

		// variable
		// $varmin-test_test123="this is a string";
		$string="this is a string";

		$number = 567;
		$boolean= true;

		echo "<br>".$string."<br>";
		echo "<div>This is a string:$string";
		echo '<div>This is a string:'.$string;

		echo 5-4*2."<br>";
		echo "<br>";
		echo (5-4)*2;


	?>

	<hr>
	<div>This is the next part...</div>
	
	<?php

		echo"My name is ".$_GET['name']."<br>";
		echo "My number is ".$_GET['number']."<br>";
		echo "<{$_GET['tpe']}>My number is {$_GET['number']}</{$_GET['type']}>";
		
		$colors = array("red","green","blue");

		echo "
			<br>$colors[0]
			<br>$colors[1]
			<br>$colors[2]
			";

		echo count($colors);
	?>

	<div style="color:<?= $colors[0]?>">This is a red apple</div>
	<?php
	$color_associative=[
		"red"=>"#f00",
		"green"=>"#0f0",
		"blue"=>"#00f"
	];

	echo $color_associative['green']."<br>";

	echo $colors[0]."<br>";
	echo $color_associative['red']."<br>";
	echo $color_associative[$colors[0]]."<br>";

	$colorObject =(object)$colors_associative;
	echo $color_associative->red."<br>";

	echo$colors;
	echo$colors_associative;
	print_r($colors);
	echo"<br>";
	echo "<pre>";print_r($colors_associative);echo "</pre>";
	echo"<br>";

	function print_p($v){
		 echo"<pre>"; print_r($v); echo "</pre>";
	}
	print_p($_GET);


	?>
</body>
</html>
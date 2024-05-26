<?php
include "../lib/php/functions.php";
$notes_object= file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");

// print_p($users_array);
?>

<!DOCTYPE html>
<html>
<head>
	<title> Reading Data</title>
	<?php include "../parts/meta.php"; ?>

</head>
<body>
	<?php include "../parts/navbar.php"; ?>
	<div class="container">
		<div class="card soft">
			<h2>Notes</h2>
			<ul>
			<?php
              for($i=0; $i<count($notes_object->notes);$i++){
              	echo "<li>{$notes_object->notes[$i]}<li>";
              }
			?>
			</ul>
		</div>
		<div class="card soft">
			<h2>Users</h2>
			<ul>
			<?php
			  for($i=0;$i<count($users_array);$i++){
			  	echo "<li>
			  	<strong>{$users_array[$i]->name}</strong>
			  	<span>{$users_array[$i]->type}</span>
			  	</li>";
			  }
			?>
			</ul>
		</div>
	</div>
</body>
</html>

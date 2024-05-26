<?php

function MYSQLIAuth(){
	return [
		"localhost", //domain name
		"shanae_wnm608", //username
		"Steakbeef1218!", //password
		"shanae_wnm608" //database name
	];
} 

function PDOAuth(){
	return [
		"mysql:host=localhost;dbname=shanae_wnm608",    //host and database
		"shanae_wnm608",    //username
		"Steakbeef1218!",     //password
		// [PDO::MYSQLI_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}
?>
<?php

function conn()
{
	$serverName = "localhost";
	$userName = "root";
	$pass = "";
	$dbName = "online-book-shop";
	$con = new mysqli($serverName, $userName, $pass, $dbName);
	return $con;

}
?>
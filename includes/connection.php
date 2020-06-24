<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "kaura";
	$db = new mysqli("$hostname","$username","$password","$database");
	if($db->connect_errno>0)
	{
	die("Sorry we are undergoing system maintanance we would be back shortly");
	}
?>
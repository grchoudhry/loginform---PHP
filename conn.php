<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="loginsystem";

	$conn=mysqli_connect($host,$user,$password,$db);
	
	if(!$conn)
	{
		die('not connected'. mysqli_error());
	}
?>
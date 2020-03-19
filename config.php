<?php
	session_start();
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "scholar";
	$conn = mysqli_connect($host,$username,$password,$db)or die(mysqli_error());

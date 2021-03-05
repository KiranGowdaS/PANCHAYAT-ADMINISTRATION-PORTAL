<?php
	session_start();
	error_reporting(1);

	$con=mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);

?>

<html>
	<head><title>Complaint Index</title></head>
	<body>


	

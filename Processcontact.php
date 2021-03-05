<?php
	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);

	$name=$_POST['name'];
	$company=$_POST['company'];
	$email=$_POST['email'];
	$telephone=$_POST['telephone'];
	$comments=$_POST['comments'];

	$res = mysql_query("insert into contactus(name,company,email,telephone,comments) values('$name','$company','$email','$telephone','$comments')");
	if(!res)
	{
		echo "<script>alert('Feedback was not accepted');</script>";
	}
	else
	{
		echo "<script>alert('Thanks for your feedback');</script>";
	}
	if($res)
	{
		header('Location:index.php');
	}

	
	
?>
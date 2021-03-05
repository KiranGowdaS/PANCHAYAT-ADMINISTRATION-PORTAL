<?php
	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");

	mysql_select_db("panchayat_admin",$con);

	$emailid = $_REQUEST['emailid'];
	
	
	$q = mysql_query("delete from issues where emailid='$emailid'");
	$q = mysql_query("delete from dummy where emailid='$emailid'");

	if($q == true)
	{	
		header('location:admin.php?option=citizenissues');
	}
	else
	{
		echo "<script>alert('Wrong Login Details, Try Again!')</script>";
	}

?>

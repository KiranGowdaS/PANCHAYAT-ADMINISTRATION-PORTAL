<?php 
	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);
	

	$emailids = $_REQUEST['emailid'];
	echo "$issue";
	echo $emailids;

	$selectquery = mysql_query("select * from issues where emailid='$emailids'");
	while($row = mysql_fetch_array($selectquery))
	{
		$issue = $row['issue'];
		$fullname = $row['fullname'];
		$emailid = $row['emailid'];
		$telephoneno =	$row['telephoneno'];
		$comments = $row['comments'];
		$insertquery = mysql_query("insert into dummy(fullname,emailid,telephoneno,issue,comments,progress) values('$fullname','$emailid','$telephoneno','$issue','$comments','')");
	}

	header("Location:admin.php?option=citizenissues");
?>

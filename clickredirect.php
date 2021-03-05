<?php
	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);

	$fullname = $_SESSION['fullname'];
	$task = $_SESSION['task'];

	$queryselect = mysql_query("SELECT fullname,task FROM member WHERE fullname='$fullname'");
	while($row = mysql_fetch_array($queryselect))
	{
		$fullnames = $row['fullname'];
		$tasks = $row['task'];
	}
	//echo $fullnames;
	//echo $tasks;

	/*$task1 = "Health Car";
	$task2 = "Education";
	$task3 = "road problem";*/

	if (($fullnames == $fullname))	
	{
		if (($tasks == "Education")) {
		header("Location:education.php");
		}

	}

	if (($fullnames == $fullname))	
	{
		if (($tasks == "Health Care"))
		{
			header("Location:healthcare.php");
		}
	}

	if (($fullnames == $fullname))	
	{
		if (($tasks == "Health Care"))
		{
			header("Location:healthcare.php");
		}
	}
	//echo $task;
	//echo $fullname;
?>

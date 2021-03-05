<?php
	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);
	//$comments = $_REQUEST['comments'];
	
	$selectquery = mysql_query("select * from dummy");
	
	echo "<body bgcolor = '#B2B8FF'>";
	echo "<br/><br/>";
	echo "<center><h3>Displaying Issues status updated from Members</h3></center>";
	echo "<table bgcolor='#B2B8FF' width='1000' cellspacing='5' cellpadding='10' border='0' height='80' align='center'>";
	echo "<div align='center'>";
	
	echo "</div>"; 

	echo "<th><center><u> Full Name </u></th><th><center> <u>Email id </u></th> <th><center><u>Telephone </u></th> <th><center><u> Issue </u></th> <th><center> <u>Comments </u></th><th><center> <u>Status </u></th>";
	while($row = mysql_fetch_array($selectquery))
	{	
		$comments = $row['comments'];
		$id = $row['dissueno'];
		$_SESSION['progress'] = $row['progress'];
		echo "<tr>";
		echo "<td align='center'>".$row['fullname']."</td>";	
		echo "<td align='center'>".$row['emailid']."</td>";
		echo "<td align='center'>".$row['telephoneno']."</td>";
		echo "<td align='center'>".$row['issue']."</td>";
		echo "<td align='center'>".$row['comments']."</td>";
		echo "<td align='center'><b>".$row['progress']."</b></td>";
		echo "<td align='center'><a href='displayissuestatustocitizen.php?comments=$comments'> update citizen status </td>";
		
	}
	
		
		/*$status = $_POST['status'];
		if(isset($_POST['Submit']))
		{
			$updatequery = mysql_query("UPDATE dummy SET progress='$status' where comments='$comments'");
		}*/
?>

<html>
<head>
<title> Admin Main Page </title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" media="screen" />

<style type="text/css">
	font {color:black;font-size:1px;line-height:10px;}
td {height:10px;vertical-align:top;}
table {
    border-collapse:collapse;
}

table, th, td {
    border: 1px solid black;
}
a {text-decoration:none;
line-height:10px;
}

</style>
</head>
<body>
</body></html>

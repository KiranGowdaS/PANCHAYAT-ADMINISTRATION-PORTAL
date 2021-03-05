<?php

	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);

	$workassign = $_POST['work'];
	if(isset($_POST['submit']))
	{

	$queryinsert=mysql_query("INSERT INTO adminwork(work) VALUES ('$workassign')");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>
a {text-decoration:none;
line-height:10px;
color: black;
border:0px solid red;
float:right;
}
</style>
</head>

<body>
<div class="container">
	<div id="menu" style="width:100%; height:auto; float:right; text-align:right; border:0px solid red;">
		<a href="adminpage.php"> Back </a> </div>
	</div>

<div class="container">
<form method="post">
Work : <input type="text" name="work" id="workassigning" maxlength="100"/>
<input type="submit" value="REGISTER" name="submit" />
	
<div id="menu" style="width:100%; height:auto; float:right; text-align:right; border:10px solid red;">

	<?php
		$queryretrieval=mysql_query("SELECT * FROM issues");
		echo "<table>";
		
		while($row=mysql_fetch_array($queryretrieval))
		{
			echo "<tr><td>".$row['issueno']."</td>";
		}
	
	?>

</form>
</div>
</body>
</html>

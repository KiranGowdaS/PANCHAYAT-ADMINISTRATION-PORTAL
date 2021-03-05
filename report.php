<?php 

	session_start();
	error_reporting(1);
	
	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);

	echo "<div align='right'>";
	echo "</div>";
	echo "<div align='center'>";
	
	$que = mysql_query("select * from biodata");
	
	echo "<body bgcolor = '#B2B8FF'>";
	echo "<table bgcolor='#B2B8FF' width='700' cellspacing='1' cellpadding='1' border='0' height='80'>";
	echo "<div align='center'>";
	echo "<h4><u>Report Display</u> </h4>";
	echo "</div>"; 
	
	while($row= mysql_fetch_array($que))
	{	
	
		echo "<tr>";
		echo "<td align='center'><u>Full Name :</u></td>";
		echo "<td colspan='1' align='center'>".$row['fullname']."</td>";
		echo "</tr>";
		
		echo "<tr><td align='center'>Email ID : </td>";		
		echo "<td align='center'>".$row['emailid']."</td></tr>";	

		echo "<tr><td align='center'> Gender :</td>";
		echo "<td align='center'>".$row['gender']."</td></tr>";

		echo "<tr><td align='center'> Contact No./ Telephone No : </td>";
		echo "<td align='center'>".$row['telephone']."</td></tr>";
		
		echo "<tr><td align='center'>Martial Status:</td>";
		echo "<td align='center'>".$row['martial_status']."</td></tr>";
	
		echo "<tr><td align='center'>Company / Organisation:</td>";
		echo "<td align='center'>".$row['company']."</td>";

		echo "</tr>";
	}

	echo "</table>";
	echo "</div>";
	echo "<br>";
?>

<html>
<body>
<style>
	table {
    border-collapse:collapse;
}
	td {height:50px;vertical-align:top; width:40px;}
	</style>
</body>
</html>

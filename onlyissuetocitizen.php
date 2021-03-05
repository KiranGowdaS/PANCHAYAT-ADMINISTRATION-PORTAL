<?php
	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);

	$fullname = $_SESSION['fullname'];

	$selectquery = mysql_query("select * from issues where fullname='$fullname'");
?>
	<form method="post">
<?php
	echo "<body bgcolor = '#B2B8FF'>";
	echo "<br/><br/>";
	echo "<table bgcolor='#B2B8FF' width='900' cellspacing='2' cellpadding='10' border='1' height='80' align='center'>";
	echo "<div align='center'>";
	
	echo "</div>"; 

	echo "<th><center><u> Full Name </u></th><th><center> <u>Email id </u></th> <th><center><u>Telephone </u></th> <th><center><u> Issue </u></th> <th><center> <u>Comments </u></th><th><center> <u>Status </u></th>";
	while($row = mysql_fetch_array($selectquery))
	{	
		$comments = $row['comments'];
		$id = $row['dissueno'];
		$progress = $row['progress'];
		echo "<tr>";
		echo "<td align='center'>".$row['fullname']."</td>";	
		echo "<td align='center'>".$row['emailid']."</td>";
		echo "<td align='center'>".$row['telephoneno']."</td>";
		echo "<td align='center'>".$row['issue']."</td>";
		echo "<td align='center'>".$row['comments']."</td>";
		echo "<td align='center'><b><i>".$row['progress']."</i></b></td>";
		echo "<td align='center'>";
			if($progress == "completed")
			{
				echo "<a href='feedback.php?comments=$comments' style='text-decoration:none'>Feedback</a>";
			}
		echo "</td>";
	}
	
	echo $status;
?>

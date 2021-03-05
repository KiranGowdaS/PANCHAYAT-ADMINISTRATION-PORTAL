<?php
	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);
	//$comments = $_REQUEST['comments'];

	$issue = $_POST['issue'];
	
?>
<html><body>

<div id="main">

<div class="container" style="border:0px solid red; padding:0 0 50px 0;"><!---Container Div Starts--->
<div class="col-lg-8 col-md-8 col-sm-12" style="border:0px solid red;"><!---Content Left Div Starts--->
<div style="padding:25px 0 0 0; margin-right:25px; border:0px solid red; " class="blacktext">

<span class="blacktextbig">Issue's Details</span><br><br>

<form method="post">
<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Select Issue <span class="pinktext">*</span></label></div><div><?php
$query = mysql_query("SELECT * FROM adminwork"); 
?>
<select name="issue" onchange="javascript: submit()">

<?php
while ($row = mysql_fetch_array($query)) {
	echo "<option>---</option>";
   echo '<option value="'.$row['work'].'">'.$row['work'].'</option>';
}
?>
</div></div></div>

</select></div></div></div><div align="center">
<?php

	if(isset($_POST['issue']))
	{
		$selectquery = mysql_query("select * from issues where issue='$issue'");
	
		echo "<body bgcolor = '#B2B8FF'>";
		echo "<br/><br/>";
		echo "<table bgcolor='#B2B8FF' width='900' cellspacing='2' cellpadding='10' border='1' height='80'>";
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
			echo "<td align='center'><b><i>".$row['issue']."</i></b></td>";
			echo "<td align='center'>".$row['comments']."</td>";
			echo "<td align='center'><b><i><u>".$row['progress']."</u></i></b></td></tr>";
		}
			
		echo "</table>";
	}
?>
</form>
</body>
</html>

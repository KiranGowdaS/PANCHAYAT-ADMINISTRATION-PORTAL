<?php

	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);

	
	$admin = $_SESSION['fullname'];
?>
<html>
<head>
<title> Admin Main Page </title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</link>
<style type="text/css">
	font {color:black;font-size:1px;line-height:10px;}
	td {height:50px;vertical-align:top;}
table {
    border-collapse:collapse;
}

a {text-decoration:none;
line-height:10px;
}
a:link {
   color: black;
} 

</style>
</head>
<body>
<div id="menu" style="width:100%; height:auto; float:right; text-align:right; border:0px solid red;">


<br/><br/><br/>
</div>
<form method="post">
	<table width="1000" height="100%"> 

<!-- Temporary use -->

	<tr><td align="center">
	<table style="width:500px" align="top" border="1" align="center">
<tr><th colspan="3" style="text-align:center"> Search for Member </th></tr>
<tr><td colspan='3' align='center'><input name="emailid" id="membership" size="20" type="text"><input type="submit" name="search" value="Search By Email" style="width:150px; height:30px;"></td></tr>
<?php
		if(isset($_POST['search']))	
		{
			$email = $_POST['emailid'];
			$queryret = "select * from citizen where emailid='$email'";
			$query = mysql_query($queryret);

			while($row =mysql_fetch_array($query))
			{
				$fullname = $row['fullname'];
				$emailid = $row['emailid'];
				$age = $row['age'];
				$address = $row['address'];
				$ph_no = $row['ph_no'];
				$password = $row['password'];
				 
				$fullname = "<input type='text' name='member' size='20' value='{$fullname}' readonly='readonly'/>";
				$emailids="<input type='text' name='emailid' size='20' value='{$emailid}' readonly='readonly'/>";
				$age = "<input type='text' name='age' size='20' value='{$age}' readonly='readonly'/>";
			
				$ph_no = "<input type='text' name='phno' size='20' value='{$ph_no}' readonly='readonly'/>";
				//$password="<input type='password' name='text' size='20' value='{$password}' readonly='readonly'/>";

			}
		}
?>

<tr><th colspan="3" style="text-align:center"> <div style="width:400; height:auto; float:center; margin:10px 40px; margin-right:20px;">Display Member Names </th></tr>
<tr><th style="text-align:center"> Member Name </th><th style="text-align:center">Email Id</th><th style="text-align:center">Task Assigned</th></tr>
<?php
		$queryret = "select fullname,emailid,task from member";
		$query = mysql_query($queryret);

		while($row =mysql_fetch_array($query))
		{
			$fullnames = $row['fullname'];
			$emailide = $row['emailid']; 
			$tasks = $row['task'];
?>
	<tr><td style="width:100px; height:40px"> 
	<center><?php echo "$fullnames"; ?></center></td>
	<td><center><?php echo "$emailide"; ?></center></td>
	<td><center><?php echo "$tasks"; }?></center></td>
	</tr>
	</table><!---First child Table Ends-->

	</td>		
	<td>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 150px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Member Name &nbsp;: </label></div><div><?php echo $fullname;?></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 150px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label></div><div><?php echo $emailids;?></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 150px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Age &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label></div><div><?php echo $age;?></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 150px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Phone Number : </label></div><div><?php echo $ph_no;?></div>
</div>
	

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 150px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label></div><div><textarea rows="5" cols="25" maxlength="1000" name="address" readonly="readonly"><?php echo $address;?></textarea></div>
</div>
<!--
<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 150px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label></div><div><?php echo $password;?></div>
</div>
-->
<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 150px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label></div><div><input name="type" id="membership" size="26" type="text" value="memberofficial" readonly="readonly" required></div>
</div>



</form>
</body></html>

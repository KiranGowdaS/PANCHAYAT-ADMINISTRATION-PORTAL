<?php
	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);


	$comments = $_REQUEST['comments'];
	// $progress = $_SESSION['progress'];
	
	$selectquery = mysql_query("select * from dummy where comments='$comments'");
	$row = mysql_fetch_array($selectquery);
	
		$comments = $row['comments'];
		$id = $row['dissueno'];
		$progress = $row['progress'];
		
		$test="<input type='text' size='20' value='{$progress}' name='issueprogress' readonly='readonly'/>";
		$issueprogress = $_POST['issueprogress'];
	
?>

<?php

	session_start();
	error_reporting(1);

	$emailid = $_SESSION['emailid'];
	if(!isset($emailid))
	{
		header("Location:index.php");
	}
	
?>
<html>
<head>
<title> Admin Main Page </title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" media="screen" />

<style type="text/css">
	font {color:black;font-size:1px;line-height:10px;}
/*/td {height:10px;vertical-align:top;}*/
table {
    border-collapse:collapse;
}

/*table, th, td {
    border: 1px solid black;
}*/
a {text-decoration:none;
line-height:10px;
}

</style>
</head>
<body>
<div id="menu" style="width:100%; height:auto; float:left; text-align:left; border:10px solid black;">
<img src="images/logo.png">

<a href="admin.php?option=reportgeneration" style="width:100px"> REPORT </a> &nbsp;&nbsp;&nbsp;
<a href="admin.php?option=addmember"> ADD MEMBER </a> &nbsp;&nbsp;&nbsp;
<a href="admin.php?option=citizen" style="width:100px"> ADD CITIZEN </a> &nbsp;&nbsp;&nbsp;
<a href="admin.php?option=citizenissues"> ISSUE </a>&nbsp;&nbsp;&nbsp;
<a href="admin.php?option=budgetissue"> BUDGET ISSUE </a>&nbsp;&nbsp;&nbsp;
<a href="admin.php?option=issuestatus"> ISSUE STATUS </a>&nbsp;&nbsp;&nbsp;
<a href="logout.php"> LOGOUT </a>

<br/><br/><br/>
</div>

<table align="left" width="100%" border="1">
<tr><td>

		<?php
	@$opt = $_GET['option'];
	if($opt=="")
	{
    error_reporting(1);
	}
	else{
		switch($opt)
		{
		
			case 'addmember':
			include('addmember.php');
			break;

			case 'citizen':
			include('addcitizen.php');
			break;
		
			case 'citizenissues':
			include('citizenissueadm.php');
			break;
	
			case 'budgetissue':
			include('budgetissue.php');
			break;

			case 'issuestatus':
			include('issuestatusadmin.php');
			break;
		}
	}
	?>
<div id="main">

<div class="container" style="border:0px solid red; padding:0 0 50px 0;"><!---Container Div Starts--->
<div class="col-lg-8 col-md-8 col-sm-12" style="border:0px solid red;"><!---Content Left Div Starts--->
<div style="padding:25px 0 0 0; margin-right:25px; border:0px solid red; " class="blacktext">


<form method="post">

<?php
		if(isset($_POST['Submit']))
		{
			$updatequery = mysql_query("UPDATE issues SET progress='$issueprogress' WHERE comments='$comments'");
			echo "<center><h5 style='color:green'>Status to Citizen</h5></center>";
		}
?>
<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Problem : <span class="pinktext">*</span></label></div><div><textarea rows="5" cols="10" style="width:320px;  height:150px;" readonly="readonly"><?php echo $comments; ?></textarea></div>
</div>
		
<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px;">
<div><label style="width:150px; float:left;" class="bodytext">Status : <span class="pinktext">*</span></label></div><div><?php echo $test; ?></div>
</div>	
		
<div class="form-group" style="width:100%; height:auto; float:left; margin:5px 0px;">
<div><label style="width:150px; float:left;" class="bodytext"></label></div><div><input value="Update Status" class="pink_button" type="submit" name="Submit"></div></div>
</td></tr>
</table>
	
</form>
</body></html>

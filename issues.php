<?php

	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);

	$fullname = $_POST['fullname'];
	$company = $_POST['company'];
	$emailid = $_POST['email'];
	$telephone = $_POST['telephone'];
	$issues = $_POST['issues'];
	$comments = $_POST['comments'];

	$emailid = $_SESSION['emailid'];
	$fullname = $_SESSION['fullname'];

	if(isset($_POST['Submit']))
	{
		$queryinsert=mysql_query("INSERT INTO issues(issueno,fullname,company,emailid,telephoneno,issue,comments,progress) VALUES ('','$fullname','$company','$emailid','$telephone','$issues','$comments','')");

	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>
label { width: 10em; float: right; }
label.error { width:150px; height:auto; float:left; margin-top:0px; margin-left:0px; color: red;  border:0px solid black;}
form input.error { border: 1px dotted red; }
form textarea.error { border: 1px dotted red; }

.error_holder { width:200px; height:auto;  float:left; margin-left:0px; border:0px solid red;}
</style>

<style>
label { width: 10em; float: right; }
label.error { width:150px; height:auto; float:left; margin-top:5px; margin-left:0px; color: red;  border:0px solid black; font-family:arial; font-size:11px; }
form input.error { border: 1px dotted red; }
form textarea.error { border: 1px dotted red; }

.error_holder { width:500px; height:auto;  float:left; margin-left:90px;}
.error_holder2 { width:200px; height:auto;  float:left; margin-left:0px;}
</style>

</head>

<body>

<div id="main"><!----Main Div Starts----------->
	
<div class="container" style="border:0px solid red; padding:0 0 50px 0;"><!---Container Div Starts--->
    	<div class="col-lg-8 col-md-8 col-sm-12" style="border:0px solid red;"><!---Content Left Div Starts--->
				<div style="padding:25px 0 0 0; margin-right:25px; border:0px solid red; " class="blacktext"><!---Padding Div Starts---->

<span class="blacktextbig">Issues On Your Sector : </span><br><br>
<form method="post">

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;">Full Name <span class="pinktext">*</span></label></div><div><input name="fullname" size="35" type="text" value="<?php echo $fullname; ?>" readonly="readonly"></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Company / Organization</label></div><div><input name="company" size="35" type="text" required></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px;">
<div><label style="width:150px; float:left;" class="bodytext">Email <span class="pinktext">*</span></label></div><div><input name="email" size="35" type="email" value="<?php echo $emailid;?>" readonly="readonly"></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Telephone <span class="pinktext">*</span></label></div><div><input name="telephone" size="35" type="number" required></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext"> Issues : </label>
<?php
$query = mysql_query("SELECT * FROM adminwork"); 

echo '<select name="issues" style="max-width:100%;">';


while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['work'].'">'.$row['work'].'</option>';
}

echo '</select>';
?>

</div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Comments <span class="pinktext">*</span></label></div><div><textarea name="comments" size="55" style="width:320px;  height:150px;" required></textarea></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:5px 0px;">
<div><label style="width:150px; float:left;" class="bodytext"></label></div><div><input class="pink_button" type="submit" name="Submit" value="Submit Problem"></div></div>
</form>
    </div>
    </div>

</div>
</body></html>

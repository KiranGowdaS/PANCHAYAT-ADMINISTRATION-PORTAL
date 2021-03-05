<?php
	session_start();
	error_reporting(1);

	$con=mysql_connect("localhost","root","","panchayat_admin") or die(mysql_error());
	mysql_select_db("panchayat_admin",$con);

	if(isset($_POST['login']))
	{
		if (isset($_POST['emailid']))
		{
			$emailid=$_POST['emailid'];
			$password=$_POST['password'];
			
			$_SESSION['emailid']=$emailid;
			$_SESSION['password']=$password; //session handling of password and username
		
			$query="select * from login WHERE emailid='$emailid' AND password='$password' AND type='admin'";
			$do_query=mysql_query($query);
			$ret_query=mysql_num_rows($do_query);
	
			while($row=mysql_fetch_array($do_query))
			{
				$_SESSION['fullname']=$row['fullname'];
				$_SESSION['pass']=$row['password'];
				$_SESSION['emailid'] = $row['emailid'];
			}
			if($ret_query == true)
			{
				echo "<script>document.location='admin.php'</script>";	
			}
			else
			{
				echo "<center><h4 style='color:red'>Email id or password is incorrect</h4></center>";
			}
		}
		if($_POST['common'] == "memberofficial")
		{
			$emailid=$_POST['emailid'];
			$password=$_POST['password'];
		
			//$_SESSION['emailid']=$emailid;
			//$_SESSION['password']=$password; //session handling of password and username
			
			$query="select * from login WHERE emailid='$emailid' AND password='$password' AND type='memberofficial'";
			$do_query=mysql_query($query);
			$ret_query=mysql_num_rows($do_query);

			while($row = mysql_fetch_array($do_query))
			{
				$_SESSION['fullname'] = $row['fullname'];
				$_SESSION['pass'] = $row['password'];
				$_SESSION['emailid'] = $row['emailid'];
			}
			if($ret_query == true)
			{
				echo "<script>document.location='memberpage.php'</script>";	
			}
			else
			{
				echo "<center><h4 style='color:red'>Emailid or password is incorrect</h4></center>";
			}
		}
		if($_POST['common'] == "citizenvillage")
		{
			$emailid=$_POST['emailid'];
			$password=$_POST['password'];
		
			//$_SESSION['emailid']=$emailid;
			//$_SESSION['password']=$password; //session handling of password and username
			
			$query="select * from citizen WHERE emailid='$emailid' AND password='$password' AND type='citizen'";
			$do_query=mysql_query($query);
			$ret_query=mysql_num_rows($do_query);

			while($row = mysql_fetch_array($do_query))
			{
				$_SESSION['fullname'] = $row['fullname'];
				$_SESSION['pass'] = $row['password'];
				$_SESSION['emailid'] = $row['emailid'];
			}
			if($ret_query == true)
			{
				echo "<script>document.location='citizenpage.php'</script>";	
			}
			else
			{
				echo "<center><h4 style='color:red'>Emailid or password is incorrect</h4></center>";
			}
		}
	}
?>
<html>
<body>
<div align="center">
<form method="post">
<br/><br/>
<table>
<tr><td>
<div id="menu" style="width:100%; height:300; float:left; text-align:left; border:0px solid black;">
<fieldset style="display: inline-flex;"><legend><font size="3">Login Panel</font></legend>
<p><b>Email Id &nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;<input type="text" name="emailid" required/>*</p>

<p><b>Password : </b>&nbsp;<input type="password" name="password" required/>*</p>

	<center><input type="radio" id="official" name="common" value="memberofficial" />
	<font size="2" color="grey">Member Official
	<input type="radio" id="citizen" name="common" value="citizenvillage" />
	Citizens</font></center><br/>
<center><input type="checkbox" name="remember"/><font size="2">Stay Signed in <br/><br />
	<center><p><input type="submit" value="Login" name="login" style="width:140; height:30; "/></p></center>
</center>
</fieldset>
</div>
</table><br/><br/>
</form>

</div>
</body>
</html> 

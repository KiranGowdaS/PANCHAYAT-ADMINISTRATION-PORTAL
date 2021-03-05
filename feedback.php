<?php
	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);


	$comments = $_REQUEST['comments'];
	
	$selectquery = mysql_query("select * from issues where comments='$comments'");
	$row = mysql_fetch_array($selectquery);
	
		$comments = $row['comments'];
		$id = $row['dissueno'];
		$progress = $row['progress'];

		$test="<input type='text' size='20' value='{$progress}' name='issueprogress'/>";
		$issueprogress = $_POST['issueprogress'];
		
	$fullname = $_SESSION['fullname'];
	$emailid = $_SESSION['emailid'];

	if(!isset($fullname))
	{
		header('Location:index.php');
	}
	
	$selectquery = mysql_query("SELECT task FROM member WHERE fullname='$fullname'");

	while($row = mysql_fetch_array($selectquery))
	{
		$task = $row['task'];
	}
		$_SESSION['task'] = $task;
?>

<html xmlns="http://www.w3.org/1999/xhtml"><head>

<title> Panchayt Adminstration </title>
<link href="file/css.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="file/jquery-2.js"></script>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">


<link type="text/css" rel="stylesheet" href="file/class.css">
<link type="text/css" rel="stylesheet" href="file/menu_styles.css">
<!--<link type="text/css" rel="stylesheet" href="file/div.css">-->


<style type="text/css">
.marginBottom-0 {margin-bottom:0;}

.dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#555;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}


</style>
<link href="file/css.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="file/jquery-2.js"></script>

<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script type="text/javascript" src="file/bootstrap-hover-dropdown.js"></script>

<link type="text/css" rel="stylesheet" href="file/class.css">
<link type="text/css" rel="stylesheet" href="file/menu_styles.css">
<!--<link type="text/css" rel="stylesheet" href="file/div.css">-->

<script type="text/javascript" src="file/back-to-top.js"></script>
<style type="text/css">
	
td {height:30px;vertical-align:top;}
table {
    border-collapse:collapse;
}
</style>
</head>

<body>
<table align="center" style="border:8px solid black" height="100%" align="top">
<tr><td>
<div id="main"><!----Main Div Starts----------->
<div align="left">
	<?php
echo "Welcome : <u>". $_SESSION['fullname']."</u>";	
?></div>
<!--<div class="container-fluid">-->

<div class="container"><!---Container Div Starts---->
<div id="top_div">
<!---Top Main Div Strats---->
	<div id="top_right">

<div id="menu" style="width:1050; height:auto; float:left; text-align:center; border:0px solid red;">
 <div style="max-width:900px; width:800; height:auto; float:right; text-align:center; margin-top:10px; border:0px solid black; text-align:center; ">
                   <nav role="navigation" class="navbar navbar-default" style="background-color:#fff; border:1px solid #fff; max-width:800px; width:100%;">
                    
                    <div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="nav navbar-nav" style="background-color:#fff;">
<li><a data-hover="dropdown" href="citizenpage.php?option=reportissue" class="greytop"><b> <font size="2"> REPORT ISSUE </font></b></a></li>
<li><a data-hover="dropdown" href="citizenpage.php?option=issuecompleted" class="greytop"><b> <font size="2"> DISPLAY ISSUE </font></b></a></li>
<li><a data-hover="dropdown" href="citizenpage.php?option=personaldetails" class="greytop"><b> <font size="2">PERSONAL DETAILS </font></b></a></li>
<li><a data-hover="dropdown" href="citizenpage.php?option=onlyissue" class="greytop"><b> <font size="2">RESPECTIVE ISSUE </font></b></a></li>
<li><a data-hover="dropdown" href="logout.php" class="greytop"><b> <font size="2">LOGOUT </font></b></a></li>

</ul>
</div>
					</div>
                  </nav>
                  </div>
				</div>
<!---Menu Div Ends---->
					</div>
                  </nav>
                  </div>
				</div>
	</div><!---Top Main Div Ends----> 
</div><!---Container Div Ends--->
 
<!--</div>-->
<div class="container-fluid"><!----Container Fluid Starts------>
  	<!--------Slider Div Starts------>
  	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="border:0px solid red; z-index:-100;">

   	 	<div align="center">
    <div class="carousel-inner" role="listbox"><!-- Wrapper for slides  Starts-->
      <div class="item">
        <img src="file/header_1.jpg" height="100" width="800">
      </div>

      <div class="item">
        <img src="file/header_2.jpg" height="100" width="800">
      </div>
    
      <div class="item active left">
        <img src="file/header_3.jpg" height="100" width="800">
      </div>

      <div class="item next left">
        <img src="file/header_4.jpg" height="100" width="800">
      </div>
      
       <div class="item">
        <img src="file/header_5.jpg" height="100" width="800">
      </div>
      
       <div class="item">
        <img src="file/header_6.jpg" height="100" width="800">
      </div>
    </div><!-- Wrapper for slides Ends-->
</div>
    <!-- Left and right controls -->
   
  </div><!-- Indicators -->
</div>


<?php
	@$opt = $_GET['option'];
	if($opt=="")
	{
	?>
	<?php
    error_reporting(1);
	}
	else{
		switch($opt)
		{
		
			case 'reportissue':
			include('issues.php');
			break;
			
			case 'health':
			include('healthissufroad.php');
			break;
		
			case 'issuecompleted':
			include('issuecompletedcitizen.php');
			break;

			case 'personaldetails':
			include('citizenpersonaldetails.php');
			break;

			case 'onlyissue':
			include('onlyissuetocitizen.php');
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
	$satisfaction = $_POST['satisfaction'];
	$daystocomplete = $_POST['daystocomplete'];
	$issueover = $_POST['issueover'];

	if(isset($_POST['Submit']))
	{
		$insertquery1 = mysql_query("UPDATE issues SET issueover='$issueover' WHERE progress='$issueprogress'");
		$insertquery2 = mysql_query("INSERT INTO feedback(fullname,emailid,daystodowork,satisfiedwork) VALUES ('$fullname','$emailid','$daystocomplete','$satisfaction')");
		
		echo "<center><h5 style='color:green'>Feedback given Thanks for your day.</h5></center>";
	}
?>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Problem : <span class="pinktext">*</span></label></div><div><textarea rows="5" cols="10" style="width:320px;  height:100px;"><?php echo $comments; ?></textarea></div>
</div>
	
<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px;">
<div><label style="width:150px; float:left;" class="bodytext">Status : <span class="pinktext">*</span></label></div><div><?php echo $test; ?></div>
</div>	
	
<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Are you satisfy with our work : <span class="pinktext">*</span></label></div><div><textarea rows="5" cols="10" style="width:320px;  height:100px;" name="satisfaction"></textarea></div>
</div>
		
<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;">How many days took to complete the work : <span class="pinktext">*</span></label></div><div><input name="daystocomplete" id="name" size="35" type="text"></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;">Delete this Issue (Yes/No) default:yes : <span class="pinktext">*</span></label></div><div><input name="issueover" id="name" size="35" type="text" value="yes"></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:5px 0px;">
<div><label style="width:150px; float:left;" class="bodytext"></label></div><div><input value="Submit Status" class="pink_button" type="submit" name="Submit"></div></div>

</td></tr>
</table>
</body></html>

<?php
	session_start();
	error_reporting(1);

	$con = mysql_connect("localhost","root","","panchayat_admin");
	mysql_select_db("panchayat_admin",$con);

	$fullname = $_SESSION['fullname'];

	if(!isset($fullname))
	{
		header('Location:index.php');
	}
	
	$selectquery = mysql_query("SELECT task,emailid FROM member WHERE fullname='$fullname'");

	while($row = mysql_fetch_array($selectquery))
	{
		$task = $row['task'];
		$emailid = $row['emailid'];
		
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

<script type="text/javascript" src="file/back-to-top.js"></script>

<style type="text/css">
	
	td {height:30px;vertical-align:top;}
table {
    border-collapse:collapse;
}

/*table, th, td {
   border: 10px solid black;
} */
</style>
</head>

<body>



<table align="center" style="border:8px solid black" height="100%" align="top">
<tr><td>
<div id="main"><!----Main Div Starts----------->
<div align="left">
	<?php
echo "Welcome : <u>". $_SESSION['fullname']."</u><br/> And Your Job : <u>". $_SESSION['task']."</u>";	
?></div>
<!--<div class="container-fluid">-->

<div class="container"><!---Container Div Starts---->
<div id="top_div">
<!---Top Main Div Strats---->
	<div id="top_right">

<div id="menu" style="width:1050; height:auto; float:left; text-align:center; border:0px solid red;">
 <div style="max-width:900px; width:700; height:auto; float:right; text-align:center; margin-top:10px; border:0px solid black; text-align:center; ">
                   <nav role="navigation" class="navbar navbar-default" style="background-color:#fff; border:1px solid #fff; max-width:800px; width:100%;">
                    
                    <div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="nav navbar-nav" style="background-color:#fff;">
<li><a data-hover="dropdown" href="memberpage.php?option=budget" class="greytop"><b> <font size="2"> REQUEST FOR AMMOUNT </font></b></a></li>
<li><a data-hover="dropdown" href="memberpage.php?option=budgetissued" class="greytop"><b> <font size="2"> BUDGET ISSUED </font></b></a></li>
<li><?php
	if($task == "Education System")
	{
		echo "<a data-hover='dropdown' href='memberpage.php?option=education'><b> <font size='2'> ISSUES</font></b> </a>";
	}

	if($task == "Health Care")
	{
		echo "<a data-hover='dropdown' href='memberpage.php?option=health'><b> <font size='2'> ISSUES </font></b></a>";
	}

	if($task == "Street Light Problem")
	{
		echo "<a data-hover='dropdown' href='memberpage.php?option=street'><b> <font size='2'> ISSUES </font></b></a>";
	}

	if($task == "Water and Sanitation")
	{
		echo "<a data-hover='dropdown' href='memberpage.php?option=water'><b> <font size='2'> ISSUES </font></b></a>";
	}

	if($task == "Roads and Transportation")
	{
		echo "<a data-hover='dropdown' href='memberpage.php?option=roads'><b> <font size='2'> ISSUES </font></b></a>";
	}
?></li>
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
		
			case 'education':
			include('eduissuefromad.php');
			break;
			
			case 'health':
			include('healthissufroad.php');
			break;
		
			case 'roads':
			include('roadprobfromad.php');
			break;

			case 'water':
			include('waterprobfromad.php');
			break;

			case 'street':
			include('streetprobfromad.php');
			break;

			case 'budget':
			include('budget.php');
			break;

			case 'budgetissued':
			include('budgetissued.php');
			break;

		}
	}

	?>

</td></tr>
</table>
</body></html>

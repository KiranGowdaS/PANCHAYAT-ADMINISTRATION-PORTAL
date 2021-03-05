<?php
	session_start();
	error_reporting(1);
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<title> Panchayt Adminstration </title>
<link href="file/css.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="file/jquery-2.js"></script>

<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script type="text/javascript" src="file/bootstrap-hover-dropdown.js"></script>

<link type="text/css" rel="stylesheet" href="file/class.css">
<link type="text/css" rel="stylesheet" href="file/menu_styles.css">
<!--<link type="text/css" rel="stylesheet" href="file/div.css">-->

<script type="text/javascript" src="file/back-to-top.js"></script>

<script type="text/javascript">
(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
</script>

<style type="text/css">
.marginBottom-0 {margin-bottom:0;}

.dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#555;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}


</style>
</head>

<body>
<table align="center">
<tr><td>
<div id="main"><!----Main Div Starts----------->
	
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
<li align="center"><a data-hover="dropdown" href="index.php" class="greytop"><b><font size="2">HOME </font></b></a></li>
<!--<li class="dropdown">
<a data-hover="dropdown" class="dropdown-toggle greytopbig" href="" class="greytop"> <b> <font size="2"> Vision and Mission </font></b> </a>
                    	<ul role="menu" class="dropdown-menu">
				<li><a href="" class="greytop">Our Story</a></li>
			</ul>
               	 	</li> -->
					<li class="dropdown"><a href="" data-hover="dropdown" class="dropdown-toggle greytopbig"> <b> <font size="2"> FOCUS AREAS </font></b> </a>
                    	<ul role="menu" class="dropdown-menu">
							<li>Drinking Water Supply</li>
							<li>Education</li>
							<li>Health Care</li>
                            <li>Street Lightening</li>
                            <li>Roads and Transportation</li>
                            <li>Sanitation and Drainage Maintainance</li>
						</ul>
                    </li>
<li><a data-hover="dropdown" href="index.php?option=contactus" class="greytop"><b> <font size="2">CONTACT US</font></b></a></li>
<!--<li><a href="index.php?option=issue" class="greytop"><b> <font size="2">ISSUES</font></b></a></li>-->
<li><a data-hover="dropdown" href="index.php?option=login" class="greytop"> <b> <font size="2">LOGIN </font></b></a> </li>

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
</div><!--------Slider Div Starts------>
<!----Container Fluid Starts------>
<!----------STORIES OF CHANGE PART------------------------------>
<div class="container">
<?php
	@$opt = $_GET['option'];
	if($opt=="")
	{
	?>

	<br/><br/>
	<h3>Our Vision and Mission</h3><br />
	<p> <font type="verdana" size="3">A gram panchayat is the cornerstone of a local self-government organisation in India of the Panchayati raj system at the village or small town level, and has a Sarpanch as its elected head.The members of the Gram panchayat are elected for a period of five years.<br /><br /> The seats are reserved for Scheduled Tribes, Scheduled Castes and women. The members of the Gram Panchayat are elected by the members of Gram Sabha.<br /><br /> The role of Panchayat organizations under British Colonial rule were strengthened, but in post-independence they have been given little right of co-determination.<br /><br /> The failed attempts to deal with local matters at the national level brought back, in 1992, the reintroduction of panchayats for their previously used purpose as an organization for local self-governance.There are about 250,000 gram panchayats in India.</p>
<br /><br />
<p>The President(Sarpanch), the elected head of the panchayat, has these responsibilities:

<!--    Maintaining street lights, construction and repair work of roads in villages and also the village markets, fairs, collection of tax, festivals and celebrations<br/><br/>-->
<ul type="circle">

<li>    Keeping a record of births, deaths and marriages in the village<br/></li>
 <li>   Providing health services and facilities<br/></li>
 <li>   Providing facilities for sanitation and drinking water<br/></li>
 <li>   Providing free education<br/></li>
 <li>   To organise the meetings of gram sabha and gram panchayat.<br/></li>
 <li>   Implementing development schemes related to agriculture and animal husbandry<br/></li>
 <li>   Planting trees in and around the village and to protect the environment<br/></li>
 <li>   Maintaining public parks and playgrounds, etc.<br/></li>
</ul>
<br /><br />
To provide some of the above mentioned needs along with the <b>Transparency</b> and <b>Efficiency</b> in the <b>Governance</b> of a Panchayat this application is being developed.
</p>
     </div>
<?php
    error_reporting(1);
	}
	else{
		switch($opt)
		{
		
			case 'login':
			include('login.php');
			break;
		
			case 'contactus':
			include('contactus.php');
			break;

			case 'issue':
			include('issues.php');
			break;

			case 'waterandsanitation':
			include('waterandsanitation.php');
			break;
		}
	}

	?>

</div>
</body></html>

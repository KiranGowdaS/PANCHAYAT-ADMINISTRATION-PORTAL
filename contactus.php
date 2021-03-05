<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

</head>

<body>

<div id="main"><!----Main Div Starts----------->
	


<div class="container" style="border:0px solid red; padding:0 0 50px 0;"><!---Container Div Starts--->
    	<div class="col-lg-8 col-md-8 col-sm-12" style="border:0px solid red;"><!---Content Left Div Starts--->
				<div style="padding:25px 0 0 0; margin-right:25px; border:0px solid red; " class="blacktext"><!---Padding Div Starts---->
		<span class="blacktextbig">Contact Us</span><br><br>


<script>
$(document).ready(function() {
	var validator = $("#contact_form").validate({
	ignore: "",
	/* rules: {
		name: { required:true, maxlength:200 },
		email: { required:true, email:true, maxlength:150 },
		telephone: { required:true, maxlength:150 },
		comments: { required:true, maxlength:500 },
		scode: { required:true }
		}, */
	errorPlacement: function(error, element) {
		$('#' + $(element).attr('id')).parent().next('.error_holder2').html(error);
		},

	messages: {
		},
	submitHandler: function() {

		//alert('Submitted');
		document.contact_form.submit();
				
		}
	});
 
});
</script>

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

<form novalidate="novalidate" method="post" action="Processcontact.php" name="contact_form" id="contact_form" class="form-inline">

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;">Full Name <span class="pinktext">*</span></label></div><div><input name="name" id="name" size="35" type="text" required></div><div class="error_holder2"></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Company / Organization</label></div><div><input name="company" id="company" size="35" type="text" required></div><div class="error_holder2"></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px;">
<div><label style="width:150px; float:left;" class="bodytext">Email <span class="pinktext">*</span></label></div><div><input name="email" id="email" size="35" type="email" required></div><div class="error_holder2"></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Telephone <span class="pinktext">*</span></label></div><div><input name="telephone" id="telephone" size="35" type="number" min=7000000000 max=9999999999 required></div><div class="error_holder2"></div>
</div>

<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px; margin-right:20px;">
<div><label style="width:150px; float:left;" class="bodytext">Comments <span class="pinktext">*</span></label></div><div><textarea name="comments" id="comments" size="55" style="width:320px;  height:150px;"></textarea></div><div class="error_holder2"></div>
</div>
<!--
<div class="form-group" style="width:100%; height:auto; float:left; margin:15px 0px;">
<div><label style="width:150px; float:left;" class="bodytext">Enter code: <span class="pinktext">*</span></label></div><div><input name="scode" id="scode" style="width:100px; height:18px; background:#ffffff; border:1px solid #dedede;" type="text"><br>
<img src="file/449.jpg" style="margin-top:10px;" align="left" border="0" height="30" hspace="0" vspace="0" width="90"><br>
</div><div class="error_holder2"></div>
</div>
-->
<div class="form-group" style="width:100%; height:auto; float:left; margin:5px 0px;">
<div><label style="width:150px; float:left;" class="bodytext"></label></div><div><input value="Submit" class="pink_button" type="submit"></div></div>
</form>
    </div><!---Padding Div Ends---->
    </div><!---Content Left Div Ends--->

</div><!---Container Div Ends--->
</body></html>

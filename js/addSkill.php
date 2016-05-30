<?php
session_start();
$EMPID="";
$NAME="";
$EMAILID="";
$DOJ="";
$REPORTINGMANAGER="";
$USERTYPE="";

$PASSWORD="";
$CONFPASSWORD="";
$loginerror="";
$success="";
$passwderror="";


include_once 'functions.php';


if (isset($_POST['Skillid']))
    {

	$Skillid1 = $_POST['Skillid'];
}
if (isset($_POST['Skillname']))
    {

	$Skillname1 = $_POST['Skillname'];
}



$sql33 = $conn->query("INSERT INTO Skills (skillid,Skillname) VALUES ('$Skillid1 ','$Skillname1')");

if($sql33)
{
header('location:skillMaintain.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Cewidus- Employee Management System</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->


	
<link type="text/css" href="css/groupUser.css" rel="stylesheet"/>


  
<script type="text/javascript" src="script/pass.js"></script>

<script>

function checkPassword() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}

function checkuser(){
var user=$("#usertype").val();
if(user=="admin"||user=="manager"||user=="employee")
$("#uerror").html("usertype is valid");
else
$("#uerror").html("usertype is not valid");

}







</script>


<style>
#innerGroup, #adminUserDiv, #adminKeyDiv{border: 2px solid #0099ff;background: none repeat scroll 0 0 #fff;}
#groupUserSettingDiv, #userCreateDiv, #userCreateKeyDiv{border: none;}
#groupUserSettingDiv table, #userCreateDiv table, #userCreateKeyDiv table{margin-left: 20%;  margin-top: 5%;}
#groupUserSettingDiv td:nth-child(1), #userCreateDiv td:nth-child(1), #userCreateKeyDiv td:nth-child(1){ height: 40px;
    width: 170px;}
.btn-action{background-image:none;}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#datepicker" ).datepicker({ dateFormat: 'yy/mm/dd' }).val();
});
</script>
</head>




<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><span style="color:white;font-size:28px;">EMPLOYEE MANAGEMENT</span></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="adminDashboard.php">Employee</a></li>
					<li><a href="skillMaintain.php">Skill</a></li>
					<li><a href="about.html">Holiday List</a></li>
                                        <li><a href="about.html">Leave Management</a></li>
                                        <li><a href="about.html">Time Management</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h2 class="page-title">Create Skill</h2>

				</header>
				<div class="row">
						<div id="createUserBodycontent" style="width:90%;height:570px;">

<div id="userCreateDiv" style="margin-top:-17px;height:770px; width:80%;margin-left:10%">
<div id="adminUserDiv" style="margin-bottom:100px;height:auto;">
<div id="userInnerDiv">


<form method="post" action="">
<table>
<tr>
<td>
        <span>Skill ID</span> </td><td>
        <p><div class="input-group"><input type="text" id = "" name="Skillid" value="" placeholder="Skill ID" class="form-control" required></div></p>
</td></tr><tr>
        <td><span>Skill Name</span></td>
        <td><p><input type="text" class="form-control" id = "username" name="Skillname" value="" placeholder="Skill Name" required></p> </td></tr>

	
		
		
		</table>  
        <p class=""><input id = ""  type="submit"  class="btn btn-action" value="CREATE SKILL" style="background-color:#3AC0FF;width:25%; margin-left:40%;font-size:15px;margin-top:5%;"></p>
  
      </form>
 	<span id = "errorSpanMessage" style="color:red"></span> 
	</div>
</div>
</div>
</div>

</div>			
									
									</div>
								</div>
				
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">some.email@somewhere.com</a><br>
								<br>
								234 Hidden Pond Road, Ashland City, TN 37015
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
							<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.html">About</a> |
								<a href="sidebar-right.html">Sidebar</a> |
								<a href="contact.html">Contact</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<!--	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>

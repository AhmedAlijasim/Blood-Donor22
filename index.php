<?php 
session_start();
include 'connect.php';
@$sql = mysqli_query($con, "SELECT * FROM client WHERE id='".$_SESSION['client_id']."'");
@$count=mysqli_num_rows($sql);
if ((empty($_SESSION['client_id'])) || ($count == 0)){ 
	session_destroy();
	header('location:client_Register/client_login.php'); }

@$_SESSION['page'] =$_GET['page'];
//Start Create Cokie For Change theme And Language Site .
include 'include/cookies.php';
//End Create Cokie For Change theme And Language Site.
if (@$_SESSION['lang']=='rtl') { $title="قطرة دم"; }
else { $title="Blood Drop"; }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title><?php echo $title; ?></title>
	<link rel="shortcut icon" href="#" type="image/x-icon"/> 
	<link rel="stylesheet"  href="css/bootstrap.css">
	<link rel="stylesheet"  href="css/style.css">
	<!--
		<link href ='http://fonts.googleapis.com/earlyaccess/droidarabickufi.css' rel='stylesheet'>  fetch this line from internet
	-->
	<!--[if It IE 9]> 
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Start Div Tool Box  -->
	<?php  include('include/toolbox.php'); ?>
	<!-- End Div Tool Box -->

	<!-- Start section Nav [main menu] -->
	<?php include'include/menu.php'; ?>
	<!-- End section Nav [main menu] -->

	<!-- Start section show Notification -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div id="notification_box"></div>
			</div>
		</div>
	</div>
	<!-- End section show Notification -->

	<!-- Start container Of The Page -->
	<section class="container-fluid">
		<div class="content">
			<div class="row"><!-- Start First Row -->
				<!-- Start Div Of Active Persons -->
				<?php include 'messenger/chat.php'; ?>
				<!-- End Div Of Active Persons -->
				
				<!-- Start Div Of Donation -->
				<div class="col-sm-6">
					<div class="donation">
						<div class="show_user_profile"></div>
						<div class="id_from_notification"></div>
						<div class="sub_donation"></div>
						<div class="sub-search"></div>
					</div>
				</div>
				 <!--End Div Of Donation -->
				<!-- Start Div Of Donatin Test -->
					<?php include 'donate/test_blood.php';?>
				<!-- Start Div Of Donatin Test -->
			</div><!-- End First Row -->
		</div>
	</section>
	<!-- End container Of The Page -->
<!-- Start Profile Of User  Section -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-6">
		</div>
	</div>
</div>
<!-- End Profile Of User  Section -->
<!-- Start Footer Section -->
<div class="container-fluid">
	<footer class="footer navbar-fixed-bottom">
		<i class="glyphicon glyphicon-chevron-up"></i>
		<div class="row slide-down-footer">
			<div class="col-md-3">
				<a href="footer/from_we.html">About</a>
			</div>
			<div class="col-md-3">
				<a href="footer/privacy_policy.html">Use Of Policy</a>
			</div>
			<div class="col-md-3">
				<a href="footer/used_condition.html">Terms Of Use</a>
			</div>
			<div class="col-md-3">
				<a href="footer/contact.php">Call Us</a>
			</div>
		</div>
	</footer>
</div>
<!-- End Footer Section -->
<!-- Start Scroll To Top -->
<div class="up">
	<i class="glyphicon glyphicon-chevron-up"></i>
</div>
<!-- End Scroll To Top -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/ajax.js"></script>
	<script src="js/toolbox.js"></script>
</body>
</html>
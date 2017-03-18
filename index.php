<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic Page Needs
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta charset="utf-8">
	<title>STATESTREET|PremierLeague</title>
	<meta name="description" content="Fantasy Premier League on IPL.">
	<meta name="author" content="Aravind S">
	
	<!-- Mobile Specific Metas
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	  <!-- FONT
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
	
	<!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css"> 		
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
	 
	<!--Javascript Files-->
	<script src="js\bootstrap.js"></script>
	
</head>
<body>

	<header class="main_nav voilet">
		<div class="container">
			<div class="twelve columns">
				<div class="logo"><i>STATESTREET - PREMIER LEAGUE</i></div>
			</div>
		</div>
	</header>

	<div class="container main">
		<div class="twelve columns">
			<div class="wrapper">
				<form class="form-signin" action="index.php" method="post">
					<!--/* <h2 class="form-signin-heading">LOGIN</h2> -->
					<div class="form-group has-feedback">
						<i class="glyphicon glyphicon-signal form-control-feedback"></i>
						<input type="text" class="form-control" name="oracleid" placeholder="Oracle Id" required="" autofocus="" />
					</div>
					
					<div class="form-group has-feedback">
						<i class="glyphicon glyphicon-user form-control-feedback"></i>
						<input type="text" class="form-control" name="username" placeholder="Sapient NT Id" required=""/>
					</div>
					
					
		<!--            <label class="checkbox">
						<input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
					</label>-->
					<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
				</form>
			</div>
		</div>
	</div><!--Container-->
	
	<div class="footer">
		<div class="row voilet">
			<div class="container">
				<div class="three columns">
					<img class="avatar" src="images/amy.jpg" />
				</div>
				<div class="eight columns">
					<h2 class="bio">About Scorpy</h2>
					<p class="bio">Working as QA in Sapient, takes in time to pull these things to entertain him in his solitude</p>
				</div>
			</div>
		</div>
	</div><!--Row Voilet-->
</body>
</html>
<?php
require 'functions.php';
//connecting to mysql
if($_POST){
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if($con)
	echo 'connected successfully';
$oracleid = $_POST["oracleid"];
	echo $oracleid;
$sql = "select * from users where oracleid = $oracleid";
//
$query=mysqli_fetch_assoc(mysqli_query($con,$sql));

session_set_cookie_params(0);
session_start();
$_SESSION["username"]=$query["username"];

if($query){
	header("Location: mainpage.php");
	die();
}
else
	echo "<script>alert('Cannot find such a user.');</script>";
	
	
}

?>
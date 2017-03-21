<html>
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
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

	<!--Javascript Files-->
	<script type="text/javascript" src="js/bootstrap.js"></script>	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>
	<script type="text/javascript" src="js/myfunctions.js"></script>
	
  
</head>
<body>
	<header class="main2_nav voilet">
		<div class="container">
			<div class="twelve columns">
				<div class="logo"><i>STATESTREET - PREMIER LEAGUE</i></div>
			</div>
		</div>

	<div class="navtop">
		<nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">SPL</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			  <ul class="nav navbar-nav">
				<li><a href="mainpage.php">Home </a></li>
				<li><a href="createteam.php">Create Team </a></li>
				<li><a href="pastscores.php">Past Scores</a></li>
				<li><a href="logout.php">Past Scores</a></li>
			  </ul>
			  <!--<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			  </form>-->
			  <ul class="nav navbar-nav navbar-right">
				<!-- <li><a href="#">Link</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">Separated link</a></li>
				  </ul>
				</li> -->
			  </ul>
		</nav>
	</div>
	</header>
	
	<?php
		session_start();
		if(!isset($_SESSION["username"])){
			header("Location: index.php");
			die();
		}
		else{
			$username = $_SESSION["username"];
		}
	?>
	<div class="container main">
		<div class="twelve columns">
			<div class="currentteam">
			<p> Hi <?php echo  $username?>,</p>
				<p>Your Current Team</p>
				<table class="table table-hover">
					<tr><td> Batsman 1 </td></tr>
					<tr><td> Batsman 2 </td></tr>
					<tr><td> Batsman 3 </td></tr>
					<tr><td> Bowler 1 </td></tr>
					<tr><td> Bowler 2 </td></tr>
					<tr><td> Bowler 3 </td></tr>
					<tr><td> All Rounder 1 </td></tr>
					<tr><td> All Rounder 2 </td></tr>
					<tr><td class="success"> Super Player </td></tr>
				</table>
			</div>
				
		</div>
	</div>
		
</body>

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.js"></script>
<script>
	$('.navtop a').click(function() {
          $(this).addClass('active').siblings().removeClass('active');
        });
	$(document).ready(function() {
		$("a.dropdown-toggle").click(function(ev) {
			$("a.dropdown-toggle").dropdown("toggle");
			return false;
			});
		$("ul.dropdown-menu a").click(function(ev) {
			$("a.dropdown-toggle").dropdown("toggle");
			return false;
		});
	});
</script>

<?php




$sql = "INSERT INTO users (oracleid, username) VALUES ('123as', '123as')";
?>
</html>
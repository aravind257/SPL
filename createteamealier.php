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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--Javascript Files-->
	<script type="text/javascript" src="js/bootstrap.js"></script>	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
  
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
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">SPL</a>
			</div>
			
			  <ul class="nav navbar-nav">
				<li><a href="mainpage.php">Home </a></li>
				<li><a href="createteam.php">Create Team </a></li>
				<li><a href="pastscores.php">Past Scores</a></li>
			  </ul>

			  <ul class="nav navbar-nav navbar-right">

			  </ul>
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	</header>
	
	<!--Getting user name from session -->
	<?php session_start();
			  $username = $_SESSION["username"]; ?>
	<div class="container main">
		<div class="twelve columns">
			<div class="newteam">
				<p>Create Your Team<br></p><p class = bg-primary>You need to select 3 batsmen, 3 bowlers and 2 all rounders<br>Please submit after selecting all players.</p>
				<p>All the best <?php echo $username?>!!</p>
<?php		
	require 'functions.php';  
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	if($con){
		$sql1 = "select * from players where p_type=0 OR p_type = 1;";
		$sql2 = "select * from players where p_type=2;";
		$sql3 = "select * from players where p_type=3;";
		$bowlers=mysqli_query($con,$sql2);
		$allrounders=mysqli_query($con,$sql3);
	}
?>
			<div class="container">
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

				  <!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
					
					  <!-- Modal content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Modal Header</h4>
						</div>
						<div class="modal-body">
						  <p>Some text in the modal.</p>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					  </div>
					  
					</div>
				  </div>
			</div>  

				<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Batsman 1
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu">
					  <?php
						$batsmen=mysqli_query($con,$sql1);
						while ($row = mysqli_fetch_array($batsmen)) {
							echo "<li><a href='#'>" . $row['p_name'] . "</a></li>";
						}
						?>
					  </ul>
				</div>
			
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Batsman 2
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					  <?php
						$batsmen=mysqli_query($con,$sql1);
						while ($row = mysqli_fetch_array($batsmen)) {
							echo "<li><a href='#'>" . $row['p_name'] . "</a></li>";
						}
						?>
					  </ul>
				</div>
					
				<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Batsman 3
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu">
					  <?php
						$batsmen=mysqli_query($con,$sql1);
						while ($row = mysqli_fetch_array($batsmen)) {
							echo "<li><a href='#'>" . $row['p_name'] . "</a></li>";
						}
						?>
					  </ul>
				</div>
				
				<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Bowler 1
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu">
					  <?php
						$bowlers=mysqli_query($con,$sql2);
						while ($row = mysqli_fetch_array($bowlers)) {
							echo "<li><a href='#'>" . $row['p_name'] . "</a></li>";
						}
						?>
					  </ul>
				</div>
				
				<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Bowler 2
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu">
					  <?php
						$bowlers=mysqli_query($con,$sql2);
						while ($row = mysqli_fetch_array($bowlers)) {
							echo "<li><a href='#'>" . $row['p_name'] . "</a></li>";
						}
						?>
					  </ul>
				</div>
				
				<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Bowler 3
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu">
					  <?php
						$bowlers=mysqli_query($con,$sql2);
						while ($row = mysqli_fetch_array($bowlers)) {
							echo "<li><a href='#'>" . $row['p_name'] . "</a></li>";
						}
						?>
					  </ul>
				</div>
				
				<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">All Rounder 1
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu">
					  <?php
						$allrounders=mysqli_query($con,$sql3);
						while ($row = mysqli_fetch_array($allrounders)) {
							echo "<li><a href='#'>" . $row['p_name'] . "</a></li>";
						}
						?>
					  </ul>
				</div>
				
				<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">All Rounder 2
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu">
					  <?php
						$allrounders=mysqli_query($con,$sql3);
						while ($row = mysqli_fetch_array($allrounders)) {
							echo "<li><a href='#'>" . $row['p_name'] . "</a></li>";
						}
						?>
					  </ul>
				</div>
			</div>
		</div>
	</div>
</body>

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.js"></script>
<script>

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
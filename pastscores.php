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
	
  
</head>
<body>
	<header class="main2_nav voilet">
		<div class="container">
			<div class="twelve columns">
				<div class="logo"><i>STATESTREET - PREMIER LEAGUE</i></div>
			</div>
		</div>
		
	<div class="navtop">
		<div class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">SPL</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="mainpage.php">Home </a></li>
					<li><a href="createteam.php">Create Team </a></li>
					<li><a href="pastscores.php">Past Scores</a></li>
				</ul>
			  
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	</header>
		
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
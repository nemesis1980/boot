<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>3. Semester Projekt - Gruppe 11</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
 
	<div class="container"> 
		<div class="row">
			<div class="logo-header">
				<a href="index.php">
				<img src="img/logo.jpg" alt="Ældreplejens hjemmeside">
				</a>
				<h1>Ældre pleje system</h1>
			</div>
		</div>
	</div>

	<div class="container"> 
		<div class="row">
			<div class="navibar col-md-12" role="navigation">
				<nav>
					<?php
						include 'menu.php';
					?>
				</nav>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="content-indhold">
				<div class="indhold-box col-md-8">
					<div class="newsbox">
						<?php
							include 'news.php';
						?>
					</div>
					<div class="elderbox">
						<?php
							include 'elder.php';
						?>
					</div>
					<div class="profilebox">
						<?php
							include 'profile.php';
						?>
					</div>
					<div class="contactbox">
						<?php
							include 'contact.php';
						?>
					</div>															
				</div>
				<div class="login-box col-md-4">
					<?php
						include 'loginbox.php';
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">	
			<div class="footer-kontakt col-md-12">
				<?php
					include 'footer.php';
				?>
			</div>
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<!-- Scripts -->
	<script type="text/javascript" src="js/script.js"></script>

  </body>
</html>

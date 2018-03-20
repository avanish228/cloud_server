<!DOCTYPE HTML>
<html>
	<head>
	<?php
         session_start();
         if(!isset($_SESSION["admin"]))
         {
           header("location:admin.php");
         }
        ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome Administrator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="admincss/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="admincss/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="admincss/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="admincss/style.css">

	<!-- Modernizr JS -->
	<script src="adminjs/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<a href="logout.php"><button type="submit" class="btn btn-lg btn-block" style="color: 000000">Logout</button></a>
				</div>
			</div>
			
		</div>
	</nav>
		
	</header>

	<div id="fh5co-core-feature">
		<div class="container">
			<div class="row">
				<center><h1>Create Hadoop Cluster</h1></center>
				<div class="features">
					<div class="col-half animate-box" data-animate-effect="fadeInLeft">
						<div class="table-c">
							<div class="desc">
								<center><h3>Using <b>Virtual Machine</b></h3>
								<p><a href="loading.php?type=vm" class="btn btn-lg btn-primary">Get Started</a></p></center>
							</div>

						</div>
					</div>
					<div class="col-half animate-box" data-animate-effect="fadeInRight">
						<div class="table-c">
							<div class="desc">
								<center><h3>Using <b>DOCKERS</b></h3>
								<p><a href="loading.php?type=docker" class="btn btn-lg btn-primary">Get Started</a></p></right></center>
							</div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- jQuery -->
	<script src="adminjs/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="adminjs/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="adminjs/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="adminjs/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="adminjs/main.js"></script>

	</body>
</html>


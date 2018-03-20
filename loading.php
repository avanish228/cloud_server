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
	<title>Loading Cluster</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />


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
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(adminimages/bg.jpg);">
						<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>configuring cluster, Please Wait ! ! ! </h1>
							
							<iframe src="https://giphy.com/embed/WEkCZf15CAud2" width="80" height="80" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

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


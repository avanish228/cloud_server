<!DOCTYPE HTML>
<?php
if(isset($_POST["submit"]))
{
   if($_POST["key"] == "12345")
   {
	  session_start();
	  $_SESSION["admin"]="12345";
          header("location:types.php");
   } 

}

?>

<html>
	<head>
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
					<div id="fh5co-logo"><a href="index.html">LocalHost</a></div>
				</div>
			</div>
			
		</div>
	</nav>
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(adminimages/img_bg_2.jpg);">
		
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h2>Please Enter Your PASSKEY!</h2>
							<div class="row">
								<form class="form-inline" id="fh5co-header-subscribe" method="post"  action="">
									<div class="col-md-8 col-md-offset-2">
										<div class="form-group">
											<input type="password" class="form-control" name="key" id="email" placeholder="PASSKEY">
											<input type="submit" class="btn btn-default" name="submit" value="Login" /></form>
										</div>
									</div>
								</form>
							</div>
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


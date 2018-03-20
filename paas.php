<!DOCTYPE HTML>
<html lang="en">

<head>
<?php
session_start();
if(!isset($_SESSION["name"]))
{
header("location:index.php");
}
?>
	<meta charset="utf-8">
	<title>PAAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- =======================================================
    Theme Name: Maxim
    Theme URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
	======================================================= -->
</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="index.php">Localhost</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="team" href="home.php#about">About</a></li>
							<li><a title="services" href="home.php#services">Services</a></li>
							<li><a title="works" href="staas.php">STAAS</a></li>
							<li><a title="blog" href="logout.php">LOGOUT</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<section id="works" class="section">
		<div class="container clearfix">
			<h4>Processing as a Service</h4><br>
			<?php if(isset($_REQUEST["file"])){ echo "<h5>Select Operation which You want to perform on File ". $_REQUEST["file"]." </h5>"; $_SESSION["file"]=$_REQUEST["file"]; }?>
			<!-- portfolio filter -->
			<div class="row">
				<div id="filters" class="span12">
					
				</div>
				<!-- END PORTFOLIO FILTERING -->
			</div>
			<div class="row">
				<div class="span12">
					<div id="portfolio-wrap">
						<!-- portfolio item -->
						<div class="portfolio-item grid print photography">
							<div class="portfolio">
								<a href="#" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/1.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Word Count</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid print design web">
							<div class="portfolio">
								<a href="#" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/2.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Line Count</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid print design">
							<div class="portfolio">
								<a href="#" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/3.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Search</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="#" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/4.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Ratings</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="#" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/5.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>MapReduce</h5>
								<p>upload your mapper and reducer program</p>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						
							</div>
						</div>
						<!-- end portfolio item -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- spacer section -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<p class="copyright">
						&copy; Localhost. All rights reserved.
					</p>
				</div>
			</div>
		</div>
		<!-- ./container -->
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>

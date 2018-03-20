<!DOCTYPE HTML>
<html lang="en">
<?php 
session_start();
if(!isset($_SESSION["name"]))
{
header("location:index.php");
}
?>
<head>
	<meta charset="utf-8">
	<title>Localhost homepage</title>
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
<?php

if(isset($_SESSION["name"]))
{
$name=$_SESSION["name"];
$email=$_SESSION["email"];
}
?>
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
					<h1 class="brand"><a href="home.html">Localhost</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="team">WELCOME  <?php if(isset($_SESSION["name"])){ echo $_SESSION["name"]; }?></a></li>
							<li><a title="team" href="#about">ABOUT US</a></li>
							<li><a title="services" href="#services">Services</a></li>
							<li><a title="works" href="staas.html">STAAS</a></li>
							<li><a title="blog" href="saas.html">CAAS</a></li>
							<li><a title="contact" href="logout.php">LOG OUT</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content">
										<strong>Optimizing</strong> and <strong>Engineering</strong> solutions
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										High performance quality <strong>Services</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										Making <strong>complex</strong> solutions <strong>simple</strong>
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>
	<!-- spacer section -->
	<section class="spacer green">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft">
					<blockquote class="large">
						There's huge space between imagination and creation, and we love to work there!<cite> Team <i>Localhost</i></cite>
					</blockquote>
				</div>
				<div class="span6 aligncenter flyRight">
					<i class="icon-coffee icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: team -->
	<section id="about" class="section">
		<div class="container">
			<h4>Who We Are</h4>
			<div class="row">
				<div class="span4 offset1">
					<div>
						<h2>We live with <strong>Technology</strong></h2>
						<p>
							The next valuable thing in this world is <strong>Data</strong>. It is the only valuable thing which is and will be running the company. We at localhost love to ease out the situations faced in the corporates in preserving their data, by serving our technology which will help users to directly store and process their datas over the cloud that can be done either by the pre-loaded algorithms or by uploading a new one. Using our services will ease out the installation of the a single system into a cluster and will help reduce human resources.
						</p>
					</div>
				</div>
				<div class="span6">
					<div class="aligncenter">
						<img src="img/icons/creativity.png" alt="" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="aligncenter">
				
				<div class="span2 offset2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="img/team/img-4.jpg" alt="" />
						<h3>Avanish Singh</h3>
					</div>
				</div>
				<div class="span2 flyIn">

					<div class="people">
						<img class="team-thumb img-circle" src="img/team/img-1.jpg" alt="" />
						<h3>P. Gouthaman</h3>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="img/team/img-3.jpg" alt="" />
						<h3>Shivankit Bagla</h3>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="img/team/img-4.jpg" alt="" />
						<h3>Abhishek Dey</h3>
					</div>
				</div>
			</div>
			</div>
	
		<!-- /.container -->
	</section>
	<!-- end section: team -->
	<!-- section: services -->
	<section id="services" class="section orange">
		<div class="container">
			<h4>Services</h4>
			<!-- Four columns -->
			<div class="row">
				<div class="span3 animated-fast flyIn">
					<div class="service-box">
						<a href="staas.html"><img src="img/icons/staas.png" alt="" />
						<h2>Storage as a Service</h2></a>
					</div>
				</div>
				<div class="span3 animated flyIn">
					<div class="service-box">
						<a href="saas.html"><img src="img/icons/saas.png" alt="" />
						<h2>Container as a Service</h2></a>
						
					</div>
				</div>
				<div class="span3 animated-fast flyIn">
					<div class="service-box">
						<a href="paas.html"><img src="img/icons/paas.png" alt="" />
						<h2>Performance as a Service</h2></a>
						
					</div>
				</div>
				<div class="span3 animated-slow flyIn">
					<div class="service-box">
						<a href="index.html"><img src="img/icons/logout.png" alt="" />
						<h2>Log Out</h2></a>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
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

<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <?php
session_start();
if(!isset($_SESSION["name"]))
{
header("location:index.php");
}
?>
		<title>HDFS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assetslist/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
		
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="#" class="logo">Welcome to LocalHost <span><strong>Abhishek Dey</strong></span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="home.html">Home</a></li>
						</ul>
						<ul class="actions vertical">
							<li>Thank You</li>
							<li><a href="index.html" class="button fit">Log Out</a></li>
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										
									</span>
									<header class="major">
										<h3>Hadoop Distributed File System  (HDFS)</h3>	
									</header>
								</article>
								<article>
									<span class="image">
										<img src="imageslist/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Welcome to your online space</h3>
										<p>Before you use hdfs, you need to store your data on Static staas</p>
										<br>
										<br>
										<ul class="actions">
										<li><a href="list.php" class="button next">Move to STATIC STAAS</a></li>
										</ul>
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Your Available Data</h2>
									</header>
									<?php
$dir_path = "cloud_storage/".$_SESSION["name"];
if (is_dir($dir_path)) {
    $i=0;
    if ($dir_handler = opendir($dir_path)) {
        while (($file = readdir($dir_handler)) !== false) {
            if($i >= 2){
            echo "filename: $file"."\n";
	    echo "<br>";}
            $i++;
        }
        closedir($dir_handler);
    }
}
?>
									<ul class="actions">
										<li><form method="post" action="paas.php">
<input type="text" name="file" placeholder="Enter File Name" />
<br>
<input class="button next" value="Process Now" type="submit" /></form></li>
									</ul>
								</div>
							</section>

					</div>

				
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							
							<ul class="copyright">
								<li>&copy; LocalHost</li></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assetslist/js/jquery.min.js"></script>
			<script src="assetslist/js/jquery.scrolly.min.js"></script>
			<script src="assetslist/js/jquery.scrollex.min.js"></script>
			<script src="assetslist/js/skel.min.js"></script>
			<script src="assetslist/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assetslist/js/main.js"></script>

	</body>
</html>
<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DEI Taskforce</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header-wrapper">
				<div id="header" class="container">

					<!-- Logo -->
						<h1 id="logo"><a href="https://science.rpi.edu/physics">RPI Physics</a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Homepage</a></li>
								<li>
									<a href="#">Resources</a>
									<ul>
										<li><a href="#">Diversi-TEA</a></li>
										<li><a href="#">DEI Colloquium</a></li>
										<li><a href="https://science.rpi.edu/physics/women-in-physics">WIP</a></li>
										<li><a href="#">DEI Library</a></li>
										<li>
											<a href="#">Extra resources</a>
											<ul>
												<li><a href="#">Link 1</a></li>
												<li><a href="#">Link 2</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="break"><a href="#footer-wrapper">Contact Us</a></li>
								<li><a href="about_us.html">Meet the Taskforce</a></li>
							</ul>
						</nav>

				</div>

                <div class="wrapper">
				<section class="container">
					<header class="major">
						<?php
        				if($_POST["message"]) {
							$to      = 'xbl76839@mzico.com';
							$subject = 'Name: ' + $_POST["name"];
							$message = $_POST["message"];
							$headers = 'From: ' + $_POST["email"];
							mail($to, $subject, $message, $headers);
        				}
        				?>
						<h2></h2>
						<p><em>Thank you for submitting.</em></p>
					</header>
				</section>
			</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
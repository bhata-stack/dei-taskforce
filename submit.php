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
	<body>
    <?php
    echo "working?";
    if( isset($_POST['name'] ) && isset( $_POST['message'] ) )
    {
        $txt= $_POST['name'].' - '.$_POST['email'].' \n '.$_POST['message'] . PHP_EOL; 
        file_put_contents('form_submission.txt', $txt, FILE_APPEND);
    }
    ?>

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
									<li class="break">
										<a href="about_us.html">Contact Us</a>
										<ul>
											<li><a href="about_us.html">DEI Taskforce</a></li>
											<li><a href="contact.html">Support Contacts</a></li>
										</ul>
									</li>
									<li><a href="about_us.html">Meet the Taskforce</a></li>
								</ul>
							</nav>

					</div>

				</div>

				<!-- Footer -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header class="major">
							<h2>Anonymous Reporting</h2>
							<p>A brief description goes here. (Email us at ---, reach out to ---, etc.)</p>
						</header>
						<div class="row">
							<section class="col-md-6 col-md-12-narrower">
								<form action="form.php" method="post" enctype="text/plain">
									<div class="row gtr-50">
										<div class="col-6 col-12-mobile">
											<input name="name" placeholder="Name" type="text" />
										</div>
										<div class="col-6 col-12-mobile">
											<input name="email" placeholder="Email" type="text" />
										</div>
										<div class="col-12">
											<textarea name="message" placeholder="Message"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Send Message" /></li>
												<li><input type="reset" value="Clear form" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="menu">
							<li>&copy; RPI Physics. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>
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
<?php
session_start();
if(isset($_SESSION["username"])) {
header('Location:admin.php'); }
error_reporting(0);
?>
<html>
	<head>
		<title>Welcome to PM banquet</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
                <link rel="stylesheet" href="../assets/css/main.css" />
		
	</head>
	<body class="landing">

			<section id="banner">
				<i class="icon fa-diamond"></i>
				<h2>PM Banquet</h2>
				<p>Enter Login Details</p>
                                <form method="post" action="test.php">
                                    <ul class="actions">
                                        <li><input type="text" name="name" placeholder="Enter User Id" autocomplete="off"></li>
                                        <li><input type="password" name="pass" placeholder="Enter Password"></li>
				</ul>
				<ul class="actions">
                                    <li><input type="submit" value="Submit" name="Login"></li>
				</ul>
                                </form>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2>Integer vitae libero acrisus egestas placerat  sollicitudin</h2>
							<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
					
				</div>
			</section>

		

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled.</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
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

		

		

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
				
					<ul class="copyright">
						<li>&copy; Untitled.</li>
						4333333333333333333333333333333333<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
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
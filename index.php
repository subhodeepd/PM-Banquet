<?php
session_start();
?>
<html>
	<head>
		<title>Welcome to PM banquet</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
                <link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.php">PM Banquet</a></h1>
                                    <a href="foodService.php">Food Service</a>
                                    <a href="gallery.php">Gallery</a>
                                    <a href="alliedService.php">Allied Service</a>
                                    <a href="contact.php">Contact Us</a>
                                    <a href="viewBooking.php" class="button small alternate">View Booking</a>
                                    
			</header>


		<!-- Banner -->
			<section id="banner">
				<i class="icon fa-diamond"></i>
				<h2>PM Banquet</h2>
                                <p></p>
                                <span></span>
				<ul class="actions">
                                    <li><a href="makeReservation.php" class="button big special">Reservation</a></li>
                                    <li><a href="checkAvailability.php" class="button big alternate">Availability</a></li>
				</ul>
			</section>

		

		<!-- Middle 
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Magna sed consequat tempus</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<ul class="actions">
						<li><a href="#" class="button big alt">Magna feugiat</a></li>
					</ul>
				</div>
			</section>

		
		<!-- Footer -->
			<?php require ("footer.php");?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
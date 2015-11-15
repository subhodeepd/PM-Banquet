
<html>
	<head>
		<title>PM Banquet - Booking Status</title>
		
                <link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="landing">
            <header id="header" class="skel-layers-fixed">
				<h1><a href="index.php">PM Banquet</a></h1>
                                    <a href="index.php">Home</a>
                                    <a href="#">Food Service</a>
                                    <a href="gallery.php">Gallery</a>
                                    <a href="#">Allied Service</a>
                                    <a href="login.php" class="button small"><?php if(isset($_SESSION["username"])) echo "Logout"; else echo "Admin";?> </a>
			</header>
            
            
            
            <section id="four" class="wrapper style2 special">
                <div class="inner">
                    
                    <header class="major narrow">
                        <h2>PM Banquet</h2>
                        <p>Enter Your Booking Details</p>
                    </header>
					
                    
                    <form method="POST" onsubmit="if(document.getElementById('human').checked) { return true; } else { alert('Hello Robot..!!'); return false; }"
						
                        <div class="container 75%">
                            <div class="row uniform 50%">
								
                                <div class="6u 12u(xsmall)">
									
                                    <input name="bid" placeholder="Booking ID" required autocomplete="off" type="text" />
								
                                </div>
                                
                            </div>
                            <div class="row uniform 50%">
								
                                 <div class="6u 12u(small)">
										
                                    <input type="checkbox" id="human" name="human">
										
                                    <label for="human">I am a human and not a robot</label>
									
                                </div>
                                
                            </div>
                        </div>
						
                          <ul class="actions">
							
                              <li><input type="submit" class="special"  value="Submit"  name="subm"/></li>
							
                              <li><input type="reset" class="alt" value="Reset" /></li>
						
                        </ul>
			</div>		
                </form>
<?php
if(isset($_POST['subm'])){

$q = $_POST['bid'];
// Create connection

$con=mysql_connect("localhost","root","");
$db = mysql_select_db("PM_Banq", $con);

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_error());
}

$result = mysql_query("SELECT * FROM booking_master WHERE booking_id='".$q."'");



echo "<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Email</th>
<th>No_of_P</th></tr>";

    while ($row = mysql_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['booking_id'] ."</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['nop'] . "</td>";
    echo "</tr>";
            
    }
    echo "</table>";
    
    mysql_close($con);
}
?>
                    
 </div>
			
            </section>
            <section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2>PM Banquet</h2>
							<h1>Sed egestas, ante et vulputate volutpat, t.</h1>
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
						
                                </a>
                            </li>
						
                            <li><a href="#" class="icon fa-twitter">
							
                                    <span class="label">Twitter</span>
						
                                </a>
                            </li>
						
                            <li><a href="#" class="icon fa-instagram">
							
                                    <span class="label">Instagram</span>
						
                                </a>
                            </li>
						
					
                        </ul>
					
				
                    </div>
			
                </footer>

		
                <script src="js/formindex.js"></script>

	</body>
</html>
 
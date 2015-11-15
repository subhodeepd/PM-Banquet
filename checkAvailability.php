<html>
	<head>
		<title>PM Banquet - Check Availability </title>
		
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
                        <p>Select A Date</p>
                    </header>
					
                    
                    <form method="POST" onsubmit="if(document.getElementById('human').checked) { return true; } else { alert('Hello Robot..!!'); return false; }"
						
                        <div class="container 75%">
                            
                           
                          <ul class="actions">
                              
                              <li><input type="date" name="dt"></li>
	
                          </ul>
						
                          <ul class="actions">
                              
                              <li><input type="checkbox" id="human" name="human">
										
                                    <label for="human">I am a human and not a robot</label></li>
	
                          </ul>
                            
                          <ul class="actions">
                              
                              <li><input type="submit" class="special"  value="Submit"  name="subm"/></li>
	
                          </ul>
                    </div>		
                </form>
      <?php
      if(isset($_POST['subm']))
        {
        
        $dt = $_POST["dt"];
        $conn = mysql_connect("localhost", "root", "");
        mysql_select_db("PM_Banq",$conn);
        $qry="SELECT * FROM availability_status WHERE date  = '$dt'  AND status LIKE 'U' AND upd <= now() - INTERVAL 1 DAY" ;
        
        $result = mysql_query($qry,$conn);
        while($row=  mysql_fetch_assoc($result)) {
            $resultset[] = $row;
            
        }
        if (!empty($resultset)) {
            foreach($resultset as $key=>$value){
                
                echo "<button class='alt'>"; echo $resultset[$key]["hour"]; echo "</button>";
            }
        }
        else {
            echo 'Opps..!! Whole Day is booked';
            }
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
 
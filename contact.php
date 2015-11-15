<?php
session_start();
?>
<html>
	<head>
		<title>PM - Contact US </title>
		
                <link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="landing">
            <?php require("header.php");?>
            
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
            
            <section id="four" class="wrapper style2 special">
                <div class="inner">
                    
                    <header class="major narrow">
                        <h2>Give Us Feedback</h2>
                        <p>Let us know how we can improve.</p>
                    </header>
					
                    
                    <form method="POST" onsubmit="if(document.getElementById('human').checked) { return true; } else { alert('Hello Robot..!!'); return false; }">
						
                        <div class="container 75%">
                            <div class="row uniform 50%">
								
                                <div class="6u 12u(xsmall)">
                                 				
                                    <input name="name" placeholder="Name" required autocomplete="off" type="text" />
								
                                </div>
								
                                <div class="6u 12u(xsmall)">
									
                                    <input name="email" placeholder="Email" type="email" required autocomplete="off"/>
								
                                </div>
                                                                
                                <div class="12u">
										
                                    <div class="select-wrapper">
											
                                        <select name="category" id="category">		
												
                                            <option value="booking">Booking</option>
												
                                            <option value="service">Service</option>
												
                                            <option value="allied_service">Allied Servie</option>
                                                                                                
                                            <option value="website">Website</option>
                                                                                                
                                            <option value="food">Food Service</option>
                              0                                                                  
                                            <option value="general">Other</option>
											
                                        </select>
										
                                    </div>
									
                                </div>
									
                                <div class="4u 12u(xsmall)">
										
                                    <input type="radio" id="priority-low" name="priority" value="low" checked>
										
                                    <label for="priority-low">Low Priority</label>
									
                                </div>
									
                                <div class="4u 12u(xsmall)">
                                                                            
                                    <input type="radio" id="priority-normal" name="priority" value="normal">
										
                                    <label for="priority-normal">Normal Priority</label>
									
                                </div>
									
                                <div class="4u 12u(xsmall)">
										
                                    <input type="radio" id="priority-high" name="priority" value="high">
										
                                    <label for="priority-high">High Priority</label>
									
                                </div>
									
									
                                
								
                                <div class="12u">
									
                                  <textarea name="message" placeholder="Message" rows="4" required autocomplete="off"></textarea>
								
                                </div>
                                
                                <div class="6u 12u(small)">
										
                                    <input type="checkbox" id="human" name="human">
										
                                    <label for="human">I am a human and not a robot</label>
									
                                </div>
							
                            </div>
                        
						
                          <ul class="actions">
							
                              <li><input type="submit" class="special"  value="Submit"  name="subm"/></li>
							
                              <li><input type="reset" class="alt" value="Reset" /></li>
						
                        </ul>
					
                </form>
                    </div>
                                    
                <?php
                                   
                if(isset($_POST['subm']))
        
                {
                    
                    
            
                    $name = $_POST['name'];
                    $email= $_POST['email'];
                    $category = $_POST['category'];
                    $prior = $_POST['priority'];
                    $msg = $_POST['message'];
                    
            
            
                    $conn = mysql_connect("localhost", "root", "");
                    mysql_select_db("PM_Banq",$conn);
                    $qry ="INSERT INTO `feedback_master` (`feedback_id`, `name`, `email`, `category`, `prior`, `message`, `date`) VALUES (NULL, '$name', '$email', '$category', '$prior', '$msg', CURRENT_DATE())"; 
                   // $qry= "INSERT INTO feedback_master(name,email,category,prior,message) values ('$name','$email','$category','$prior',$msg',CURRENT_DATE)";
                    $result=  mysql_query($qry,$conn);
                   if($result)
                    {
                        echo"Thank You ";
                
                    }
                    else
                    {
                        echo"Please Try Again";
                    }
           
                }

                ?>
				
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
<?php
session_start();
?>
<html>
	<head>
		<title>PM - Food Services </title>
		
                <link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="landing">
            <header id="header" class="skel-layers-fixed">
                <h1><a href="index.php">PM Banquet</a></h1>
                    <a href="index.php">Home</a>
                    <a href="foodService.php">Food Service</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="#">Allied Service</a>
                    <a href="contact.php">Contact Us</a>

                    
            </header>
            <?php if(isset($_SESSION["username"]))
                    {                                        
                                        
                        echo "<section id='three' class='wrapper style3 special'>
				<div class='inner'>
					
					<ul class='actions'>
						<li><a href='addFoodItem.php' class='button small special'>Add Food Item</a></li>
                                                <li><a href='removeFoodItem.php' class='button small special'>Remove Food Item</a></li>
                                                <li><a href='updateFoodItem.php' class='button small special'>Update Food Item</a></li>
					</ul>
				</div>
			</section>"; 
                        
                    }
                    ?>
            <section id="four" class="wrapper style1 special">
                <div class="inner">
                    <header class="major narrow">
                        <h2>Food Menu</h2>
                    </header>
                    
                
                    <section class="inner">
                        <?php
                                    $conn = mysql_connect("localhost", "root", "");
                                    mysql_select_db("PM_Banq",$conn);
                                    $qry="SELECT * FROM food_category ";
                                    $result = mysql_query($qry,$conn);
                                    while($row=  mysql_fetch_assoc($result)) {
                                        $resultset[] = $row;
                                        
                                    }
                                    if (!empty($resultset)) { 
                                    foreach($resultset as $key=>$value){
                                        $category=$resultset[$key]["category"];
                                    
                                        
                         ?>
                        <div class="inner style2">
                      
                            <h3><?php echo $resultset[$key]["category"]; ?></h3>
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
					</tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = mysql_connect("localhost", "root", "");
                                        mysql_select_db("PM_Banq",$conn);
                                        $qry="SELECT * FROM food_master WHERE category LIKE '$category'";
                                        $rslt = mysql_query($qry,$conn);
                                        while($rw=  mysql_fetch_assoc($rslt)) {
                                        $resultst[] = $rw;
                                        
                                        }
                                        if (!empty($resultst)) { 
                                        foreach($resultst as $key=>$value){
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $resultst[$key]["food_name"]; ?></td>
                                            <td><?php echo $resultst[$key]["food_desc"]; ?></td>
                                            <td><?php echo $resultst[$key]["food_price"]; ?></td>
					</tr>
                                        
                                        <?php 
                                        } unset($resultst);} ?>
										
                                    </tbody>
									
				</table>
                            </div>	
                        </div>
                                    <?php } } ?>
                    </section>

                </div>
            </section>
            
                            
                        

        
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

		
           

	</body>
</html>

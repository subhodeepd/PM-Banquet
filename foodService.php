<html>
	<head>
            <title>PM - Food Services </title>
            <link rel="stylesheet" href="assets/css/main.css" />
        </head>
	<body class="landing">
            <header id="header" class="skel-layers-fixed">
                <h1><a href="index.php">PM Banquet</a></h1>
                <a href="index.php">Home</a>
                <a href="viewBooking.php" class="button small alternate">Order Food</a>
                <a href="gallery.php">Gall
                    ery</a>
                <a href="alliedService.php">Allied Service</a>
                <a href="contact.php">Contact Us</a
                                        
            </header>
            </header>
      
            <section id="four" class="wrapper style special">
                <div class="inner">
                    <header class="major narrow">
                        <h2>Food Menu</h2>
                    </header>
                    
                
                    <section class="inner">
                        <?php
                                    $conn = mysql_connect("mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/", "adminaQYhir2", "IBEgx-AkNgY3");
mysql_select_db("pm",$conn);
                                    $qry="SELECT * FROM food_category ";
                                    $result = mysql_query($qry,$conn);
                                    while($row=  mysql_fetch_assoc($result)) {
                                        $resultset[] = $row;
                                        
                                    }
                                    if (!empty($resultset)) { 
                                    foreach($resultset as $key=>$value){
                                        $category=$resultset[$key]["category"];
                                    
                                        
                         ?>
                        <div class="inner special">
                      
                            <h3><?php echo $resultset[$key]["category"]; ?></h3>
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
					</tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = mysql_connect("mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/", "adminaQYhir2", "IBEgx-AkNgY3");
mysql_select_db("pm",$conn);
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
            <?php require("footer.php"); ?>
	</body>
</html>


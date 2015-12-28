<?php
session_start();
require ('header.php');
$selected=$_POST["selected"];
?>
<html>
	<head>
		<title>Welcome to PM banquet</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
                <link rel="stylesheet" href="assets/css/main.css" />
		
        </head>
        <body class="landing">
        
            <section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Album Photos</h2>

					</header>
					<div class="image-grid">
                                            <?php
                                            $conn = mysql_connect("mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/", "adminaQYhir2", "IBEgx-AkNgY3");
mysql_select_db("pm",$conn);
                                            $qry="SELECT * FROM image_master WHERE album_id= $selected";
                                            $result = mysql_query($qry,$conn);
                                            while($row=  mysql_fetch_assoc($result)) {
                                            $resultset[] = $row;
                                        
                                            }
                                            if (!empty($resultset)) { 
                                            foreach($resultset as $key=>$value){
                                        
                                            ?>
						<a href="#" class="image"><img src="data:image/jpg;base64,<?php echo base64_encode($resultset[$key]["image"]); ?>" alt="" /></a>
						
                                            <?php } } ?>
					</div>
					<ul class="actions">
						<li><a href="gallery.php" class="button big alt">Back to Gallery</a></li>
					</ul>
				</div>
			</section>
            
            
        </body>
        
        
        
</html>
<?php
session_start();
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
            <header id="header" class="skel-layers-fixed">
                <h1><a href="index.php">PM Banquet</a></h1>
                    <a href="index.php">Home</a>
                    <a href="#">Food Service</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="#">Allied Service</a>
                    <a href="feedback.php">Contact Us</a>
     
            </header>
            <section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2><?php echo "Selected ID=".$selected; ?></h2>
						<p>Album Desc</p>
					</header>
					<div class="image-grid">
                                            <?php
                                            $conn = mysql_connect("localhost", "root", "");
                                            mysql_select_db("PM_Banq",$conn);
                                            $qry="SELECT * FROM gallery_master ORDER BY date DESC";
                                            $result = mysql_query($qry,$conn);
                                            while($row=  mysql_fetch_assoc($result)) {
                                            $resultset[] = $row;
                                        
                                            }
                                            if (!empty($resultset)) { 
                                            foreach($resultset as $key=>$value){
                                        
                                            ?>
						<a href="#" class="image"><img src="data:image/jpg;base64,<?php echo base64_encode($resultset[$key]["album_thumb"]); ?>" alt="" /></a>
						
                                            <?php } } ?>
					</div>
					<ul class="actions">
						<li><a href="gallery.php" class="button big alt">Back to Gallery</a></li>
					</ul>
				</div>
			</section>
            
            
        </body>
        
        
        
</html>
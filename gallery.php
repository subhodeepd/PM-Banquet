<?php
session_start();
require("header.php");
?>

	<head>
		<title>PM - Gallery</title>
                    <link rel="stylesheet" href="assets/css/main.css" />
	</head>
     <section id="four" class="wrapper style1 special">
                <div class="inner">
                    <header class="major narrow">
                        <h2>Gallery</h2>
                        <p>OUR RECENT EVENTS</p>
                    </header>
                
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
                    <form action="photogrid.php" method="POST">                
                        <section id="one" class="wrapper style2 special">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="data:image/jpg;base64,<?php echo base64_encode($resultset[$key]["album_thumb"]); ?>" alt="" /></span>
						<div class="content">
                                                   
                                                        <h1><?php echo $resultset[$key]["date"]; ?></h1>
							<h2><?php echo $resultset[$key]["album_name"]; ?></h2>
							<h1><?php echo $resultset[$key]["album_desc"]; ?>.</h1>
							<ul class="actions">
								<li>
                                                                    <button type="submit" class="button small special">More</a>
                                                                    <input type="hidden" id="selected" name="selected" value="<?php echo $resultset[$key]["album_id"]?>"/>
								</li>
							</ul>
                                                        
						</div>
					</article>
					
				</div>
			</section>
                    </form>

                        <?php } } ?>
                    </div>
            </section>
        <?php  require("footer.php");?>


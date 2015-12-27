<?php
require("header.php");

?>
<html>
    
	<head>
		<title>PM Banquet - Check Availability </title>
		
                <link rel="stylesheet" href="assets/css/main.css" />
                
		
	</head>
	<body class="landing">

            <section id="one" class="wrapper style1">
                <div class="inner">
                    <article class="feature left">
                        <span class="image"><img src="images/book.jpg" alt="" /></span>
			<div class="content">
                            <form method="POST" onsubmit="if(document.getElementById('human').checked) { return true; } else { alert('Hello Robot..!!'); return false; }">
                                <h2>Select Date</h2>
                                <ul class="actions">
                                    <h1><input type="date" name="date"></h1> 
                                    <li>
                                        <input type="checkbox" id="human" name="human">
                                        <label for="human">I am a human and not a robot</label>
                                    </li>
                                    <li><input type="submit" class="special"  value="Check"  name="subm"/></li>
                                </ul>
                            </form>
				
                            <?php
                            if(isset($_POST['subm']))
                            {
        
                            $dt = $_POST["date"];
                            $conn = mysql_connect("localhost", "root", "");
                            mysql_select_db("PM_Banq",$conn);
                            $qry="SELECT * FROM booking_status WHERE date  = '$dt'  AND status LIKE 'U' AND last_modified <= now() - INTERVAL 1 DAY" ;
        
                            $result = mysql_query($qry,$conn);
                            while($row=  mysql_fetch_assoc($result)) {
                                $resultset[] = $row;
                            }
                            if (!empty($resultset)) {
                                foreach($resultset as $key=>$value){
                
                                echo "<a href='makeReservation.php' class='button small alternate'>"; echo $resultset[$key]["session"]; echo "</a>";
                            } }
                            else {
                                echo 'Opps..!! Unavailable';
                            }
                            } ?>
                                
                        
                        </div>
                        
                    </article>
					    
                </div>
                
            </section>

            <?php require('footer.php');?>
            <script src="js/formindex.js"></script>

	</body>
</html>
 
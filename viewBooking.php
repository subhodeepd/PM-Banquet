<?php
require("header.php");

?>

<html>
	<head>
		<title>PM - Booking Details</title>
		
                <link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="landing">
            <section id="one" class="wrapper style1">
		<div class="inner">
                    <article class="feature left">
                        <div class="content">
                            <form method="POST">
                                <input type="text" placeholder="Enter Booking ID" name="id" required>
                                <ul class="actions">
                                    <li><input type="submit" name="ser"></li>
                                </ul>
                            </form>
                        </div>
                    </article>
					
                </div>
            </section>
            
            <?php
            if(isset($_POST['ser']) || isset($_GET['booking_id']))
            {
                if(isset($_GET['booking_id']))
                {
                    $id = $_GET['booking_id'];
                }
                else {
                    $id=$_POST["id"];
                }
       
            $conn = mysql_connect("localhost", "root", "");
            mysql_select_db("PM_Banq",$conn);
            $qry="SELECT * FROM booking_master WHERE booking_id= '$id'";
        
            $result = mysql_query($qry,$conn);
            if(!empty($result))
            {
            while($row=  mysql_fetch_assoc($result)) {   ?>
            
            
            <section id="three" class="wrapper style2">
                <div class="inner">
                    <header class="major narrow	">
                        <h2>Booking ID: <?php echo $row["booking_id"]; ?></br><?php echo $row["title"].$row["name"];  ?></h2>
                    </header>
                    		
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Event</th>
                                    <th>Date</th>
                                    <th>Session</th>
                                    <th>No. of Persons</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td><?php echo $row["event_type"];?></td>
                                <td><?php echo $row["date"];?></td>
                                <td><?php echo $row["sessions"];?></td>
                                <td><?php echo $row["nop"];?></td>
                                <td ><a href="print.php?var=<?php echo $id; ?>"><?php echo $row["status"];?></a></td>
                            </tbody>
                        </table>
                        <h2>Get your food order quotation:    </h2><a href="foodOrder.php?var=<?php echo $id;?>" class="button small special">Now</a>
                    </div>
                </div>
            </section>
                                    
				
            <?php
            }}
                    else {
                        echo "Enter Correct Booing Id";
            } } ?>
                                    
            
            
            
            <?php require ("footer.php");?>
        </body>
</html>
            

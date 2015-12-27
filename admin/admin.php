<?php
session_start();
if(!isset($_SESSION["username"])) {
header('Location:index.php'); }
error_reporting(0);
require("base.php");
require("navbar.php");
if(!isset($_SESSION["username"])) {
$_SESSION['msg']= "Welcome to PM Banquet.! Good day .!";}
?>
<html>
    <head>
        <title>PM- Admin Panel</title>
    </head>
    <body class="landing">
        <div class="container">
            <h4>Recent Bookings</h4>
            <?php
             $conn = mysql_connect("localhost", "root", "");
                mysql_select_db("PM_Banq",$conn);
                $qry="SELECT * FROM booking_master WHERE status LIKE 'PENDING' ORDER BY booking_time DESC LIMIT 3";
        
                $result = mysql_query($qry,$conn);
                while($row=  mysql_fetch_assoc($result)) {
                        $resultset[] = $row;
                        
                    }
                    if (!empty($resultset)) {
                        foreach($resultset as $key=>$value){
                    ?>
                    
                    <div class="col s12 m7">
                        
                        <div class="card medium">
                            <div class="container">
                                <span class="card-title activator grey-text text-darken-4"></span>
                                <h3><?php echo $resultset[$key]["date"];   echo $resultset[$key]["sessions"];  ?></h3>
                                <a id="flow-toggle" class="btn waves-effect waves-light large"><?php echo $resultset[$key]["event_type"]; ?></a>
                                <h5>Guests: <?php echo $resultset[$key]["nop"]; ?></h4>
                                <blockquote>
                                    <p class="flow-text"><?php echo $resultset[$key]["name"];?></p>
                                    <p class="flow-text">Contact No: <?php echo $resultset[$key]["phone"]; ?></p>
                                </blockquote>

                            </div>
                       
                        </div>
       <?php     }}?>
        
        
            
    </body>
</html>
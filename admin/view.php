<?php
session_start();
if(!isset($_SESSION["username"])) {
header('Location:index.php'); }
error_reporting(0);
require("base.php");
require("navbar.php");
?>
<html>
    <head>
        <title>PM - View Booking</title>	
    </head>
    <body class="landing">
        <div class="container">
            <header class="center">
                <h2>Reservations</h2>
            </header>
    
           <form method="post" class="col s12"  >
                <div class="row">
                    <div class="row">
                        <h2>Select Date</h2>
                        <div class="input-field col s6">
                            <input name="date" type="date" >
                            <button type="submit" name="ser" class="waves-effect waves-light btn">View</button>
                        
                        </div>
                    </div>
                </div>
           </form>
           <div class="row">
            
            <?php
            if(isset($_POST['ser']))
            {
                $date = $_POST['date'];
                
       
                $conn = mysql_connect("localhost", "root", "");
                mysql_select_db("PM_Banq",$conn);
                $qry="SELECT * FROM booking_status WHERE date= '$date'";
        
                $result = mysql_query($qry,$conn);
                while($row=  mysql_fetch_assoc($result)) {
                        $resultset[] = $row;
                        
                    }
                    if (!empty($resultset)) {
                        foreach($resultset as $key=>$value){
                    ?>
                    
                        <div class="col s12 m5">
                            <div class="card-panel teal">
                                <h4 class="white-text"><?php echo $resultset[$key]["session"]; ?></h4>
                                <span class="white-text">Booked By  :  <?php echo $resultset[$key]["booking_id"]; ?></span><br>
                                <span class="white-text"><?php echo $resultset[$key]["last_modified"]; ?></span>

                            </div>
                        </div>
                        <?php }}
                     
                    else{
                        echo "Select Another Date";
                    }
            }?>
           </div>     
                                    
            
            
       
        </body>
</html>
            

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
        <title>PM - View Event</title>	
    </head>
    <body class="landing">
        <div class="container">
          
    
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
         
            
            <?php
            if(isset($_POST['ser']))
            {
                $date = $_POST['date'];
                
       
                $conn = mysql_connect("localhost", "root", "");
                mysql_select_db("PM_Banq",$conn);
                $qry="SELECT * FROM booking_master WHERE date= '$date' AND status LIKE 'CONFIRMED'";
        
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
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                <h3><?php echo $resultset[$key]["sessions"]; ?></h3>
                                <a id="flow-toggle" class="btn waves-effect waves-light large"><?php echo $resultset[$key]["event_type"]; ?></a>
                                <h5>Guests: <?php echo $resultset[$key]["nop"]; ?></h4>
                                <blockquote>
                                    <p class="flow-text"><?php echo $resultset[$key]["name"];?></p>
                                    <p class="flow-text">Contact No: <?php echo $resultset[$key]["phone"]; ?></p>
                                </blockquote>

                            </div>
                            <div class="card-reveal"><a id="flow-toggle" class="btn waves-effect waves-light">Toggle flow-text</a>
                                <span class="card-title grey-text text-darken-4"><p><?php echo $resultset[$key]["note"]; ?></p><i class="material-icons right">close</i></span>
                            </div>
                        </div>
                            
                        <?php }}
                     
                    else{
                        echo "No Booking ..Yet!";
                    }
            }?>
           </div>     
                                    
            
            
       
        </body>
</html>
            

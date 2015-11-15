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
    </head>
    <body class="landing">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active" href="#test1">Low Priority</a></li>
                        <li class="tab col s3"><a href="#test2">Normal Priority</a></li>
                        <li class="tab col s3"><a href="#test3">High Priority</a></li>
                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <div class="row">
                    
                    <?php
                                    $conn = mysql_connect("localhost", "root", "");
                                    mysql_select_db("PM_Banq",$conn);
                                    $qry="SELECT * FROM feedback_master  WHERE prior='low' ORDER BY date DESC";
                                    $result = mysql_query($qry,$conn);
                                    while($row=  mysql_fetch_assoc($result)) {
                                        $resultset[] = $row;
                                        
                                    }
                                    if (!empty($resultset)) { 
                                    foreach($resultset as $key=>$value){
                                        
                                    ?>
                    
                        <div class="col s12 m5">
                            <div class="card-panel teal">
                                <h4><?php echo $resultset[$key]["category"]; ?></h4>
                                <span class="white-text"><?php echo $resultset[$key]["message"]; ?></span>
                                
                            </div>
                        </div>
                        
                    
                                    <?php  } } ?>
                        </div>
                </div>
                <div id="test2" class="col s12">
                    <div class="row">
                    
                    <?php
                    $qry="SELECT * FROM feedback_master WHERE prior='normal' ORDER BY date DESC";
                    $norresult = mysql_query($qry,$conn);
                    while($norrow=  mysql_fetch_assoc($norresult)) {
                        $norresultset[] = $norrow;
                        
                    }
                    if (!empty($norresultset)) {
                        foreach($norresultset as $key=>$value){
                    ?>
                    
                        <div class="col s12 m5">
                            <div class="card-panel teal">
                                <h4 class="white-text"><?php echo $norresultset[$key]["category"]; ?></h4>
                                <span class="white-text"><?php echo $norresultset[$key]["name"]; ?></span>
                                <span class="white-text"><?php echo $norresultset[$key]["email"]; ?></span></br>
                                <span class="white-text"><?php echo $norresultset[$key]["message"]; ?></span>
                                
                            </div>
                        </div>
                        
                    
                    <?php  } } ?>
                    </div>
                </div>
                <div id="test3" class="col s12">
                    <div class="row">
                    
                    <?php
                        $qry="SELECT * FROM feedback_master  WHERE prior='high' ORDER BY date DESC";
                        $high = mysql_query($qry,$conn);
                        while($highrow=  mysql_fetch_assoc($high)) {
                                        $highresultset[] = $highrow;
                                        
                                    }
                                    if (!empty($highresultset)) { 
                                    foreach($highresultset as $key=>$value){
                                        
                                    ?>
                    
                        <div class="col s12 m5">
                            <div class="card-panel teal">
                                <h4><?php echo $highresultset[$key]["category"]; ?></h4>
                                <span class="white-text"><?php echo $highresultset[$key]["message"]; ?></span>
                                
                            </div>
                        </div>
                        
                    
                                    <?php  } } ?>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>
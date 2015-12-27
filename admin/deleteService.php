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
        <title>PM - Delete Service </title>	
    </head>
    <body class="landing">
        <div class="container">
            <header class="center">
                <h2>Select Service Item</h2>
            </header>	
                    
            <form method="POST" action="DBHandler.php" class="col s12"  >
                <div class="row">
                    <div class="row">
                        <div class="input-field col s6">
                            <span>Service Name</span>
                            <select name="service" id="service" >		
                                    <?php
                                    $conn = mysql_connect("localhost", "root", "");
                                    mysql_select_db("PM_Banq", $conn);
                                    $query = mysql_query("SELECT * FROM allied_master");
                                    while ($run = mysql_fetch_array($query)) {
                                        $name = $run['service_name'];

                                        echo "<option value='$name'>$name</option>";
                                    }
                                    ?>

                            </select>
          
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <button type="submit" name="delService" class="waves-effect waves-light btn-large">Delete</button>
                          
                    </div>
                </div>
               
           </form>
        </div>
    </body>
</html>
   
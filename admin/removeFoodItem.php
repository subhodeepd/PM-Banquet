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
        <title>PM - Delete Food Item </title>
	
        <script type="text/javascript">
        $(function() {
	
            //autocomplete
            $(".auto").autocomplete({
		source: "search.php",
		minLength: 1
            });				
        });
        </script>
		
    </head>
    <body class="landing">
        <div class="container">
            <header class="center">
                <h2>Select Food Item</h2>
            </header>	
                    
            <form method="POST" action="DBHandler.php" class="col s12"  >
                <div class="row">
                    <div class="row">
                        <div class="input-field col s6">
                            <span>Food Name</span>
                            <input placeholder="Search for Food Item" name="ser" type="text" class="auto" id="searchq">
          
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <button type="submit" name="delFood" class="waves-effect waves-light btn-large">Delete</button>
                          
                    </div>
                </div>
               
           </form>
        </div>
    </body>
</html>
   
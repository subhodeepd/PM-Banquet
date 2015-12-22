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
        <title>PM - Delete Food Item </title
        <link rel="stylesheet" type="text/css" href="auto/jquery.autocomplete.css" />
<script type="text/javascript" src="auto/jquery.js"></script>
<script type="text/javascript" src="auto/jquery.autocomplete.js"></script>
        <script>
 $(document).ready(function(){
  $("#tag").autocomplete("autocomplete.php", {
        selectFirst: true
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
                    <div class="input-field col s6">
                            <span>Food Name</span>
                            <input name="fname" type="text" id="tag">
                    </div>
                    <div class="input-field col s6">
                        <button type="submit" name="delFood" class="waves-effect waves-light btn-large">Delete</button>
                          
                    </div>
                </div>
               
           </form>
        </div>
    </body>
</html>
   
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
        <title>PM - Booking Management </title>	
    </head>
    <body class="landing">
        <div class="container">
            <header class="center">
                <h2>Reservations</h2>
            </header>
    
           <form method="post" action="bookingHandler.php" class="col s12"  >
                <div class="row">
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="ser" type="text" >
                            <label for="order">Order ID</label>
          
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Confirm</a>
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Delete</a>
                    </div>
                </div>
               

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Confirm</h4>
                        <p>Policies</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="add" class="modal-action modal-close waves-effect waves-green btn-flat">Confirm</button>
                    </div>
                </div>
  
                <!-- Modal Structure -->
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <h4>Delete</h4>
                        <p>Policies</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="cancel" class="modal-action modal-close waves-effect waves-green btn-flat">Delete</button>
                    </div>
                </div>
               
           </form>
        </div>
    </body>
</html>
<?php
session_start();
if(!isset($_SESSION["username"])) {
header('Location:index.php'); }
error_reporting(0);
require("base.php");
if(!isset($_SESSION["username"])) {
$_SESSION['msg']= "Welcome to PM Banquet.! Good day .!";}
?>
<html>
    <body>
        <!-- Dropdown Structure -->
        <ul id="booking" class="dropdown-content">
            <li><a href="view.php">View<i class="small material-icons left">subtitles</i></a></li>
            <li><a href="booking.php">Manage<i class="small material-icons left">note_add</i></a></li>
            
        
        </ul>
        
        <ul id="food" class="dropdown-content">
            <li><a href="addFoodItem.php">Add<i class="small material-icons left">library_add</i></a></li>
            <li><a href="updateFoodItem.php">Update<i class="small material-icons left">library_books</i></a></li>            
            <li><a href="removeFoodItem.php">Delete<i class="small material-icons left">delete</i></a></li>
        </ul>

        <ul id="album" class="dropdown-content">
            <li><a href="addAlbum.php">Add Album<i class="small material-icons left">note_add</i></a></li>
            <li><a href="addPhoto.php">Add Photos<i class="small material-icons left">library_add</i></a></li>
            <li><a href="delAlbum.php">Delete<i class="small material-icons left">delete</i></a></li>            
        </ul>
        
        <ul id="service" class="dropdown-content">
            <li><a href="addService.php">Add<i class="small material-icons left">library_add</i></a></li>
            <li><a href="deleteService.php">Delete<i class="small material-icons left">delete</i></a></li>            
        </ul>
        
        <nav>
            <div class="nav-wrapper teal darken-4">

                <ul class="left hide-on-med-and-down">
                    <li><a href="admin.php">PM Banquet<i class="small material-icons left">store</i></a></li>

                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="booking">Manage Booking<i class="large material-icons left">shopping_cart</i></a></li>
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="food">Food Services<i class="large material-icons left">shopping_basket</i></a></li>
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="album">Manage Gallery<i class="large material-icons left">perm_media</i></a></li>
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="service">Services<i class="large material-icons left">work</i></a></li>
                    
                    <li><a href="viewEvent.php">Event<i class="small material-icons left">today</i></a></li>
                    <li><a href="feedWatcher.php">Feedback<i class="small material-icons left">hearing</i></a></li>
                </ul>
      
                <ul class="right hide-on-med-and-down">
                    <li><a href="test.php?logout();"><i class="small material-icons left">power_settings_new</i>Logout</a></li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <div class="col s12 m6">
                <div class="card teal">
                    <div class="card-content white-text">
                        <span class="card-title">Notifications</span>
                        <p></p>
                    </div>
                    <div class="card-action">
                        <a href="#"><?php
                            if(isset($_SESSION["msg"])){ 
                            echo "<div class='chip'>".$_SESSION['msg']."<i class='material-icons'>close</i></div>";
                            $_SESSION['msg']= "Welcome to PM Banquet.! Good day .!";
                            }?>
                        </a>
    
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
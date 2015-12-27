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
        <title>PM - Add Food Item</title>
			
    </head>
    <body class="landing">
        <div class="container">
            <header class="center">
                <h2>New Food Item</h2>
                <p>Enter new food detais.</p>
            </header>	
                    
           <form method="POST" action="DBHandler.php" class="col s12"  >
                <div class="row">
                    <div class="row">
                        <div class="input-field col s6">
                            <span>Food Name</span>
                            <input placeholder="Enter Food Name" name="name" type="text" required autocomplete="off">
          
                        </div>
                        <div class="input-field col s6">
                            <span>Food Price</span>
                            <input name="price" type="text" placeholder="Enter Food Price" required autocomplete="off">
                        </div>
                     </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select name="Category" id="Category">		
                                            <?php
                                            $conn = mysql_connect("localhost", "root", "");
                                            mysql_select_db("PM_Banq",$conn);
                                            $query = mysql_query("SELECT * FROM food_category");
                                            while($run = mysql_fetch_array($query)){
                                                $id= $run['category_id'];
                                                $category = $run['category'];
                  
                                                echo "<option value='$category'>$category</option>";
                                            }?>
						
                            </select>					
                        </div>
                        <div class="input-field col s6">
                            <select name="Availability" id="Availability">
                                <option value="available">Available</option>
                                <option value="unavailable">Unavailable</option>
                            </select>
									
                        </div>
                        <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="icon_prefix2" name="message" class="materialize-textarea"></textarea>
                                    <label for="icon_prefix2">Food Description</label>
                                </div>
                        </div>
                        <div class="input-field col s6">
                            <button type="submit" name="addFood" class="waves-effect waves-light btn-large">Submit</button>
                          
                        </div>
                    </div>
                </div>
           </form>
     
        </div>
    </body>
</html>
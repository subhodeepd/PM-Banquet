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
		<title>PM - Add Photos</title>
		
                <link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="landing">
            <div class="container">

                    <header class="center">
                        <h2>PM Banquet</h2>
                        <p>Upload photos into the album</p>
                    </header>
					
                    
                <form method="POST" action="DBHandler.php"enctype="multipart/form-data" class="col s6">
                      
                            <div class="row">
                                <div class="input-field col s6">
                                    <select name="Album_id" id="album_name" >		
                                            <?php
                                            $conn = mysql_connect("localhost", "root", "");
                                            mysql_select_db("PM_Banq",$conn);
                                            $query = mysql_query("SELECT * FROM album_master");
                                            while($run = mysql_fetch_array($query)){
                                                $id= $run['album_id'];
                                                $name = $run['album_name'];
                  
                                                echo "<option value='$id'>$name</option>";
                                            }?>
						
                                    </select>
                                </div>
                               
                                <div class="file-field input-field col s6">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file" name="image">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path " type="text">
                                    </div>
                                </div>                            
                                <div class="input-field col s6">
                                    
                                    <button type="submit" name="addPhoto" class="waves-effect waves-light btn-large">Submit</button>
                          
                                </div>
                            </div>
                                
                      
                    </form>
           
  
            </div>
	</body>
</html>
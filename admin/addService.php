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
		<title>PM - Add Service</title>
			
	</head>
	<body class="landing">
            <div class="container">
                <header class="center">
                    <h2>New Allied Sercice</h2>
                    <p>Enter service detais.</p>
                </header>
                    
                <form method="POST"  enctype="multipart/form-data" action="DBHandler.php" class="col s12"  >
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s6">
                                    <span>Service Name</span>
                                    <input placeholder="Enter Service Name" name="name" type="text" class="validate">
          
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="icon_prefix2" name="desc" class="materialize-textarea"></textarea>
                                    <label for="icon_prefix2">Service Description</label>
                                </div>
                            </div>
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path " type="text">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="input-field col s6">
                                    <button type="submit" name="addService" class="waves-effect waves-light btn-large">Create</button>
                                    
							
                                    <button type="reset" name="reset" class="waves-effect waves-light btn-large" value="Reset" />Reset</button>
				
                                </div>
                            </div>
                        </div>
                </form>
            </div>

	</body>
</html>
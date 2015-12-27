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
        <title>PM - Update Food Item </title>
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
                <h2>Update Food Item</h2>
                <p>Enter new food detais.</p>
            </header>	
                    
           <form method="POST" class="col s12"  >
                <div class="row">
                    <div class="row">
                        <div class="input-field col s6">
                            <span>Food Name</span>
                            <input placeholder="Search for Food Item" name="ser" type="text" class="auto" id="tag">
          
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <button type="submit" name="subm" class="waves-effect waves-light btn-large">Submit</button>
                          
                    </div>
                </div>
               
           </form>
                                          
 
               
<?php
if(isset($_POST['subm'])){

$q = $_POST['ser'];
// Create connection


$con=mysql_connect("localhost","root","");
$db = mysql_select_db("PM_Banq", $con);

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_error());
    
}
$result = mysql_query("SELECT * FROM food_master WHERE food_name='".$q."'");

while($row = mysql_fetch_array($result)){ ?>
            <div class='inner'>
                    
                <header class='major narrow'>
                    <h2>Enter Food Details</h2>
                </header>
					
                    
                <form method='post' action='DBHandler.php'>
						
                    <div class='row'>
                        <div class='row'>
								
                            <div class='input-field col s6'>
                                
                                <input name='fname' id='name' type='text' value='<?php echo $row["food_name"]; ?>'>
                                <label for='name' >Food Name</label>
				
                            </div>
								
                            <div class='input-field col s6'>
                                <input name='foodPrice' id='price' type='text' value='<?php echo $row["food_price"]; ?>"'>
                                <label for='price'>Food Price</label>

                            </div>
                            
                            <div class='row'>
                                <div class='input-field col s12'>
                                    
                                    <i class='material-icons prefix'>mode_edit</i>
                                    <input type='text' id='icon_prefix' name='fdesc' class='materialize-textarea' value='<?php echo $row["food_desc"]; ?>'>
                                    <label for='icon_prefix'>Food Description</label>
                                </div>
                            </div>
                            <div class='input-field col s6'>
                           
                                <span><?php echo $row['available'] ?></span>
          
                                <select name='fstatus' id='availability'>
                                    <option value='available'>Available</option>
                                    <option value='unavailable'>Unavailable</option>
                                </select>
								
                            </div>
                            <div class='row'>
                    		<input type='hidden' name='fid' value='<?php echo $row["food_id"] ?>'>	
                            </div>
                               			
                            <div class='input-field col s6'>
                                    <button type='submit' name='updateFood' class='waves-effect waves-light btn-large'>Update</button>
                          
                            </div>
				
                        </div>
                    </div>
		</form>	
                    <?php } }?>
            </div>
        </div>>
    </body>
</html>

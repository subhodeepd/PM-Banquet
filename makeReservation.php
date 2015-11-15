<?php
session_start();
require("base.php");
?>
<html>
	<head>
		<title>PM - Make Reservation</title>
	
	</head>
	<body class="landing">
                <div class='container'>
                    <header class='center'>
                        <h4><a href="index.php">PM Banquet</a></h4>
                        <p>Enter Booking Details</p>
                    </header>
                    <form action="makeReservation.php" method="post" class="col s6">
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s6">
                                    <span>Select Date</span>
                                    <input type="date" name="dt" class="datepicker">                                
                                    <button type="submit" name="subm" class="waves-effect waves-light btn">Submit</button>
                                </div>
                            </div>
                          
                        </div>
                    </form>
                                <?php
                                if(isset($_POST['subm']))
        {
        
        $dt = $_POST["dt"];
        $conn = mysql_connect("localhost", "root", "");
        mysql_select_db("PM_Banq",$conn);
        $qry="SELECT * FROM booking_status WHERE date  = '$dt'  AND status LIKE 'U' AND last_modified <= now() - INTERVAL 1 DAY" ;
        
        $result = mysql_query($qry,$conn);
        while($row=  mysql_fetch_assoc($result)) {
            $resultset[] = $row;
            
        }
        if(!empty($resultset))
                    {
            
        ?>
       <form method='post' action='dbReservation.php' onsubmit="if(document.getElementById('human').checked) { return true; } else { alert('Hello Robot..!!'); return false; }">
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s6">
                                    <select name='gender' id='gender'>								
                                            <option value='male'>Mr.</option>
                                            <option value='female'>Mrs.</option>
                                            <option value='female'>Miss</option>
                                            <option value='female'>Ms.</option>									
                                    </select>
                                </div>
                                
                                <div class="input-field col s6">
                                    <input name='name' placeholder='Name' required autocomplete='on' type='text' />
                                </div>
                                
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name='email' placeholder='Email' type='email' required autocomplete='on'/>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name='phone' placeholder='Phone Number' type='text' required autocomplete='on'/>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">mode_edit</i>
                                        <textarea id="icon_prefix2" name="address" class="materialize-textarea"></textarea>
                                        <label for="icon_prefix2">Address</label>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="input-field col s6">
                                        <select name='category' id='category'>							
                                            <option value='Marriage'>Marriage</option>
                                            <option value='Birthday'>Birthday</option>
                                            <option value='FreshersParty'>Fresher's Party</option>
                                            <option value='FarewellParty'>Farewell Party</option>
                                            <option value='Anniversaty'>Anniversary</option>
                                            <option value='general'>Other</option>
                                        </select>
                                    </div>
                                    
                                    <div class="input-field col s6">
                                        <input type='text' id='nop' name='nop' placeholder="Enter Number of Persons">
                                    </div>
                                </div>
                                      
                                <div class="row">
                                    <div class="input-field col s6">
                                        <span>Select Food </span>
                                        <input type='checkbox' id='ht' value='Hi-Tea' name="food[]" >
                                        <label for='ht'>HiTea</label>
                                        <input type='checkbox' id='vm' value='Veg-Meal' name="food[]">
                                        <label for='vm'>Veg Meal</label>
                                    </div>
                                    <div class="input-field col s6">
                                       <span>Select Session </span>
                                        <?php foreach($resultset as $key=>$value){ ?>
                                        <input type='checkbox' id='<?php echo $resultset[$key]["session"];?>' value='<?php echo $resultset[$key]["session"];?>' name='session[]' >
                                        <label for='<?php echo $resultset[$key]["session"];?>'><?php echo $resultset[$key]["session"];?></label> 
                                        <?php }?>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type='checkbox' id='human' name='human'>
                                        <label for='human'>I am a human and not a robot</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input type='hidden' name='date' value="<?php echo $dt?>">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="input-field col s6">
                                        <button type="submit" name="book" class="waves-effect waves-light btn-large">Book</button>
                                        <button type="reset" class="waves-effect waves-light btn-large">Reset</button>
                                        
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                    </form>
             <?php
                    }
                    else
                    {
                        echo"Unavailable..!! Select Another Date";
                    }
        
        }?>
                </div>
     		
            
	</body>
</html>
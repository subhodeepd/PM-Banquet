<html>
    <head>
        <title>PM - Make Reservation</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <link rel="stylesheet" href="assets/material/css/materialize.min.css">
        <link rel="stylesheet" href="assets/material/css/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/material/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/material/css/style.css">
    </head>

    <body class="landing">
        <nav>
            <div class="nav-wrapper">

                <ul class="left hide-on-med-and-down">
                    <li><a href="index.php">PM Banquet</a></li>
                </ul>
      
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php"><i class="small material-icons left">home</i>Home</a></li>
                    <li><a href="foodService.php">Food</a></li>
                    <li><a href="event.php">Allied Service</a></li>
                    <li><a href="contact.php">Help</a></li>
                </ul>
            </div>
        </nav>
        
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
                            <input type="text" id="datepicker" name="dt">                                
                            <button type="submit" name="subm" class="waves-effect waves-light btn">Submit</button>
                        </div>
                    </div>
                          
                </div>
            </form>
            <?php
            if(isset($_POST['subm']))
            {
        
            $dt = $_POST["dt"];
            $conn = mysql_connect("mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/", "adminaQYhir2", "IBEgx-AkNgY3");
mysql_select_db("pm",$conn);
            $qry="SELECT * FROM booking_status WHERE date  = '$dt'  AND status LIKE 'U' AND last_modified <= now() - INTERVAL 1 DAY" ;
        
            $result = mysql_query($qry,$conn);
            while($row=  mysql_fetch_assoc($result)) {
            $resultset[] = $row;
            
            }
            if(!empty($resultset))
                    { ?>
                        <a href="index.php">Selected Date: <?php  echo $dt;?></a>
                        <form method='post' action='DBHandler.php' onsubmit="if(document.getElementById('human').checked) { return true; } else { alert('Hello Robot..!!'); return false; }">
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s6">
                                    <select name='gender' id='gender'>								
                                            <option value='Mr.'>Mr.</option>
                                            <option value='Mrs.'>Mrs.</option>
                                            <option value='Miss.'>Miss</option>
                                            <option value='Ms.'>Ms.</option>									
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
                                        <textarea id="icon_prefix2" name="address" class="materialize-textarea" required></textarea>
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
                                        <input type='text' id='nop' name='nop' placeholder="Enter Number of Persons" required>
                                    </div>
                                </div>
                                      
                                <div class="row">
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
        
        <script type="text/javascript" src="assets/material/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/material/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/material/js/materialize.min.js"></script>
        <script type="text/javascript" src="assets/material/js/ajax.js"></script>
        <script type="text/javascript" src="assets/material/js/style.js"></script>
        <script type="text/javascript" src="assets/material/js/custom.js"></script>
        <script>
  $(function() {
    $( "#datepicker" ).datepicker({
    dateFormat: 'yy-mm-dd',
    minDate:'+7',
    maxDate: '+90'
        
        });
  });
  </script>
     		
    </body>
</html>
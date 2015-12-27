<html>
    <body>
        
        <form method="POST">
            <input type="date" name="dt" >
            <input type="submit" name="sub">
            
                <?php
                 
                $conn = mysql_connect("localhost", "root", "");
                mysql_select_db("PM_Banq",$conn);
                
               $qr="SELECT * FROM booking_status ORDER BY avail_id DESC LIMIT 1";
               $rslt=mysql_query($qr,$conn);
                if(!empty($rslt))
                {
                while($row=  mysql_fetch_assoc($rslt)) {
                    echo $row["date"];
                }}
                if(isset($_POST['sub'])){
        
                $date= $_POST['dt'];
        
                    
                
                $query="INSERT INTO `pm_banq`.`booking_status` (`avail_id`, `session`, `date`, `status`, `last_modified`, `booking_id`) VALUES (NULL, 'Morning', '$date', 'U', CURRENT_TIMESTAMP, NULL);";
                $qry="INSERT INTO `pm_banq`.`booking_status` (`avail_id`, `session`, `date`, `status`, `last_modified`, `booking_id`) VALUES (NULL, 'Evening', '$date', 'U', CURRENT_TIMESTAMP, NULL);";
        $result= mysql_query($query,$conn);
        $resultset=  mysql_query($qry,$conn);
        if($result)
        {
            header('Location:newEmptyPHP.php');
            
                
        }
        else
        {
            echo "Something went wrong..! Please Try Again...";
           
        }
                
                 }
                ?>
        </body>
</html>
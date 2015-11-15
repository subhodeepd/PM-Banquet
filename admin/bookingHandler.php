<?php
session_start();
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("PM_Banq",$conn);
$id = $_POST['ser'];

$qry = "SELECT * FROM booking_status WHERE `booking_id` = '$id'";
$result = mysql_query($qry,$conn);
$row = mysql_num_rows($result);
if($row > 0)
{
    if(isset($_POST['add'])){
    
    $query ="UPDATE `pm_banq`.`booking_status` SET `status`='B' WHERE `booking_status`.`booking_id` = '$id'";
    $rslt = mysql_query($query,$conn);
        if($rslt)
        {
            
            $msg = "Booking Confirmed..!!";
            $_SESSION['msg'] = $msg;
            header('Location:booking.php?$msg');
            
        }
        else
        {
            $msg ="Please Try Again";
            $_SESSION['msg'] = $msg;
            header('Location:booking.php?');
            
        }
    }
    
}
 else {

     $msg = "Enter Correct Booking ID";
     $_SESSION['msg'] = $msg;
     header('Location:booking.php');
}



?>


        
        
        
        
        
        
        
        
        
        
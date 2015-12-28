3<?php
session_start();
$conn = mysql_connect("mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/", "adminaQYhir2", "IBEgx-AkNgY3");
mysql_select_db("pm",$conn);


if(isset($_POST['book'])){
    
    $name = $_POST['name'];
    $title= $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $event = $_POST['category'];
    $nop = $_POST['nop'];
    $session = json_encode($_POST['session']);

    
    $qry ="INSERT INTO `booking_master` (`booking_id`,`title`, `name`,`address`, `phone`,`email`,`nop`,`date`,`sessions`,`event_type`) VALUES (NULL, '$title', '$name', '$address', '$phone','$email','$nop','$date','$session','$event')";


    $result = mysql_query($qry,$conn);
    if($result)
    {
        $id = mysql_insert_id();
            
    }
 
    
    
    
    else
    {
        echo"Please Try Again";
    }
    foreach($_POST['session'] as $check) 
    {             
        $query ="UPDATE `pm`.`booking_status` SET `booking_id`=$id,`last_modified` = CURRENT_TIMESTAMP WHERE `booking_status`.`date` = '$date'  AND session LIKE '$check'";
        $result = mysql_query($query,$conn);
        if($result)
        {
            
            header('Location:viewBooking.php?booking_id='.$id);
            
        }
        else
        {
            echo"Please Try Again";
        }
    }
}



if(isset($_POST['feed'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $category = $_POST['category'];
    $prior = $_POST['priority'];
    $msg = $_POST['message'];
    
    
    $qry ="INSERT INTO `feedback_master` (`feedback_id`, `name`, `email`, `category`, `prior`, `message`, `date`) VALUES (NULL, '$name', '$email', '$category', '$prior', '$msg', CURRENT_DATE())";
    $result=  mysql_query($qry,$conn);
    if($result)
    {
        header('Location:contact.php');
    }
    else
    {
        header('Location:contact.php');
            
    }
        
}

?>


        
        
        
        
        
        
        
        
        
        
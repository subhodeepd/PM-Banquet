<?php
session_start();
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("PM_Banq",$conn);


if(isset($_POST['addAlbum']))
    {
        $name = $_POST['albumname'];
        $date= $_POST['date'];
        $desc= $_POST['desc'];
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
                    
        $qry ="INSERT INTO `album_master` (`album_id`, `album_name`,`album_desc`, `date`,`album_thumb`) VALUES (NULL, '$name', '$desc', '$date','$imageData')"; 
            
        $result=  mysql_query($qry,$conn);
        if($result)
        {
            $msg= " Album Created..!";
            $_SESSION['msg'] = $msg;
            header('Location:addAlbum.php');
                
        }
        else
        {
            $msg= "Something went wrong..! Please Try Again...";
            $_SESSION['msg'] = $msg;
            header('Location:addAlbum.php');
        }
           
    }

        
        
if(isset($_POST['addPhoto']))
        {
    
            $id = $_POST['Album_id'];
           
            $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
            $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
            
 
            
            if(substr($imageType, 0, 5) == "image" )
            {
                $qry="INSERT INTO image_master VALUES ('NULL','$id','$imageData')";
                $result=  mysql_query($qry,$conn);
            
                if($result)
                {
                    $msg= " Photo Uploaded!";
                    $_SESSION['msg'] = $msg;
                    header('Location:addPhoto.php');
                }
                else
                {
                    $msg= " Photo Not Uploaded!";
                    $_SESSION['msg'] = $msg;
                    header('Location:addPhoto.php');
                }
                
            }
            else
            {
                $msg= " Only Images are Allowed!";
                $_SESSION['msg'] = $msg;
                header('Location:addPhoto.php');
            }
        }
        
        
        
if(isset($_POST['addFood']))
    {
                    $name = $_POST['name'];
                    $price= $_POST['price'];
                    $desc = $_POST['message'];
                    $category = $_POST['Category'];
                    $status = $_POST['Availability'];
                    
                    $qry ="INSERT INTO `food_master` (`food_id`, `food_name`,`food_price`, `food_desc`, `category`,`availability`) VALUES (NULL, '$name', '$price', '$desc', '$category','$status')"; 
                   
                    $result=  mysql_query($qry,$conn);
                    $id = mysql_insert_id();
                   if($result)
                    {
                        echo $id;
                        $msg= "New Food Item Added..!!".$id;
                        $_SESSION['msg'] = $msg;
                        header('Location:addFoodItem.php');
                
                    }
                    else
                    {
                        $msg= " Something Wrong..! Please Try Again.!";
                        $_SESSION['msg'] = $msg;
                        header('Location:addFoodItem.php');;
                    }
           
                }
               
if(isset($_POST['updateFood'])){
    
    $id = $_POST['fid'];
    $name= $_POST['fname'];
    $desc= $_POST['fdesc'];
    $status= $_POST['fstatus'];

    $query ="UPDATE `pm_banq`.`food_master` SET `food_name`='$name',`food_desc`='$desc',`availability`='$status' WHERE `food_master`.`food_id` = '$id'";
    $rslt = mysql_query($query,$conn);
    if($rslt)
    {
        $msg= $name." Details updated..!";
        $_SESSION['msg'] = $msg;
        header('Location:updateFoodItem.php');
                
    }
    else
    {
        $msg= "Something went wrong..! Please Try Again...";
        $_SESSION['msg'] = $msg;
        header('Location:updateFoodItem.php');
    }
       
}


if(isset($_POST['delFood'])){
    
   
    $name= $_POST['fname'];

    $query ="DELETE FROM `pm_banq`.`food_master` WHERE `food_master`.`food_name` = '$name'";
    $rslt = mysql_query($query,$conn);
    if($rslt)
    {
        $msg= $name." Details deleted..!";
        $_SESSION['msg'] = $msg;
        header('Location:removeFoodItem.php');
                
    }
    else
    {
        $msg= "Something went wrong..! Please Try Again...";
        $_SESSION['msg'] = $msg;
        header('Location:removeFoodItem.php');
    }
}


if(isset($_POST['addService']))
    {
        $name = $_POST['name'];
        $desc= $_POST['desc'];
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
                    
        $qry ="INSERT INTO `allied_master` (`service_id`, `service_name`,`service_desc`,`service_thumb`) VALUES (NULL, '$name', '$desc','$imageData')"; 
            
        $result=  mysql_query($qry,$conn);
        if($result)
        {
            $msg= " Service Added..!";
            $_SESSION['msg'] = $msg;
            header('Location:addService.php');
                
        }
        else
        {
            $msg= "Something went wrong..! Please Try Again...";
            $_SESSION['msg'] = $msg;
            header('Location:addService.php');
        }
           
    }
    
    if(isset($_POST['delService'])){
    
   
    $name= $_POST['service'];

    $query ="DELETE FROM `pm_banq`.`allied_master` WHERE `allied_master`.`service_name` = '$name'";
    $rslt = mysql_query($query,$conn);
    if($rslt)
    {
        $msg= $name." Details deleted..!";
        $_SESSION['msg'] = $msg;
        header('Location:deleteService.php');
                
    }
    else
    {
        $msg= "Something went wrong..! Please Try Again...";
        $_SESSION['msg'] = $msg;
        header('Location:deleteService.php');
    }
}

if(isset($_POST['delAlbum'])){
    
   
    $id= $_POST['Album_id'];

    $query ="DELETE FROM `pm_banq`.`image_master` WHERE `image_master`.`album_id` = '$id'";
    $qry ="DELETE FROM `pm_banq`.`album_master` WHERE `album_master`.`album_id` = '$id'";
    $result = mysql_query($query,$conn);
    $rslt=  mysql_query($qry,$conn);
    if($rslt)
    {
        $msg= $name."Album deleted..!";
        $_SESSION['msg'] = $msg;
        header('Location:delAlbum.php');
                
    }
    else
    {
        $msg= "Something went wrong..! Please Try Again...";
        $_SESSION['msg'] = $msg;
        header('Location:delAlbum.php');
    }
}
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
            
        $qry= "insert into gallery_master(album_name,date,album_desc,album_thumb) values ('$name','$date','$desc','$imageData')";
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
           
            $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
            $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
            
 
            
            if(substr($imageType, 0, 5) == "image" )
            {
                $qry="INSERT INTO images VALUES ('0','$id','$imageData')";
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
                    
                    $qry ="INSERT INTO `food_master` (`food_id`, `food_name`,`food_price`, `food_desc`, `category`,`available`) VALUES (NULL, '$name', '$price', '$desc', '$category','$status')"; 
                   
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

    $query ="UPDATE `pm_banq`.`food_master` SET `food_name`='$name',`food_desc`='$desc',`available`='$status' WHERE `food_master`.`food_id` = '$id'";
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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PM_Banq";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $upd ="UPDATE food_master SET food_name=$_GET[foodName], food_price=$_GET[foodPrice], food_desc=$_GET[foodDesc] available=$_GET[foodAvail]  WHERE food_id=$_GET[foodId]";
    $rslt=mysql_query($upd);
    if($rslt)
    {
        echo"Updated";
                
    }
    else
    {
        echo"Not Updated";
    }
    
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$con=mysql_connect("localhost","root","");
$db = mysql_select_db("PM_Banq", $con);

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_error());
}

if(isset($_GET['ser'])){
    $return_arr = array();

    $name = $_GET['ser'];
    $qry = "SELECT food_name FROM food_master WHERE food_name LIKE '$nqme%' ";

    $res = mysql_query($qry);

    while($row = mysql_fetch_array($res))
    {
        $return_arr[] = $row['food_name'];
    }
        
    }
    
    echo json_encode($return_arr);
?>
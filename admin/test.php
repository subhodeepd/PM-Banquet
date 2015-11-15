<?php
session_start();
if(!isset($_SESSION["username"])) {
header('Location:admin.php'); }
 else {
     session_unset();    
    session_destroy();
    header('location:index.php');
     
}



$u = $_POST['name'];
$p = $_POST['pass'];

$list=array("admin"=>"admin","root"=>"firefox");
if(isset ($list[$u]) && $list[$u]==$p)
{
    $_SESSION["username"] = $u;
    header('location:admin.php');
}
else
{
    header('location:index.php?Wrong Credentials');
}
?>
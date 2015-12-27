<?php
 $q=$_GET['q'];
 $my_data=mysql_real_escape_string($q);
 
 
 $conn = mysql_connect("localhost", "root", "");
 mysql_select_db("PM_Banq",$conn);
 $qry="SELECT food_name FROM food_master WHERE food_name LIKE '%$my_data%' ORDER BY food_name";
 $result = mysql_query($qry,$conn);

 if($result)
 {
  while($row=mysql_fetch_array($result))
  {
   echo $row['food_name']."\n";
  }
 }
?>
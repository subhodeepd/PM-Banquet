<?php
mysql_connect("localhost", "root", "");
mysql_select_db("PM_Banq");

$output = '';

if(isset($_POST['searchVal'])){
    $searchq = $_POST['searchVal'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
    
    
    
    $qry="SELECT * FROM food_master WHERE food_name LIKE '%$searchq%'";
    $result = mysql_query($qry);
    
    $count = mysql_num_rows($result);
    if($count == 0){
        $output = 'There is no Search results..!';
    }
    else{
        while($row=  mysql_fetch_array($result)) {
            $name = $row['food_name'];
            $id = $row['food_id'];
            
            $output .= '<div>'.$name.'</div>';
        }
    
    }
}
echo ($output);    

?>
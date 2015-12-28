<?php
require ("fpdf17/fpdf.php");
$id = $_GET['var'];

$conn = mysql_connect("mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/", "adminaQYhir2", "IBEgx-AkNgY3");
mysql_select_db("pm",$conn);
$qry="SELECT * FROM booking_master WHERE booking_id= '$id'";
        
$result = mysql_query($qry,$conn);
if(!empty($result))
{
    while($row=  mysql_fetch_assoc($result)) {
        $nop = $row['nop'];
    }
}



 if(isset($_POST['HiTea'])){
     
    
     $food = json_encode($_POST['hiTea_order']);
     $category = "Hi-Tea";
    
     $pp = 100;
     $total = $nop*$pp;
          

    $pdf = new FPDF();
    $pdf->AddPage();
    
    $pdf->SetFont("Arial","B",60);
    $pdf->cell(180,30,"PM Banquet",1,1,"C");
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(180,10,"Thank You for choosing us.",1,1,"C");
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(90,10,"Booking ID:$id",1,1,"C");
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(40,10,"",0,1);
    $pdf->cell(40,10,"",0,1);
    $pdf->cell(45,10,"Selected Items:  ",0,0);
    $pdf->SetFont("Arial","", 12);
    $pdf->cell(180,30,$food,0,1);
    
    
    $pdf->cell(40,10,"Category",1,0);
    $pdf->cell(30,10,"Per Plate",1,0);
    $pdf->cell(20,10,"NOP",1,0);
    $pdf->cell(50,10,"Total",1,1);
    $pdf->SetFont("Arial","", 16);
    $pdf->cell(40,10,$category,1,0);
    $pdf->cell(30,10,$pp,1,0);
    $pdf->cell(20,10,$nop,1,0);
    $pdf->cell(50,10,$total,1,0);
    
    $pdf->Output();
 
 
 
 }
 
  if(isset($_POST['veg_book'])){
      
      
    $appe = json_encode($_POST['appe_order']);
    $first = json_encode($_POST['first_order']);
    $main = json_encode($_POST['main_order']);
    $dessert = json_encode($_POST['dessert_order']);

    
    $pp = 300;
    $total = $nop*$pp;
    $category= "Veg-Meal";
    
     $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",60);
    $pdf->cell(180,30,"PM Banquet",1,1,"C");
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(180,10,"Thank You for choosing us.",1,1,"C");
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(90,10,"Booking ID:$id",1,1,"C");
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(40,10,"",0,1);
    $pdf->cell(40,10,"Appetizers",0,1,"C");
    $pdf->SetFont("Arial","B",10);
    $pdf->cell(180,30,"$appe",1,1);
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(40,10,"First-Meal",0,1,"C");
    $pdf->SetFont("Arial","B",12);
    $pdf->cell(180,30,"$first",1,1);
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(40,10,"Main-Meal",0,1,"C");
    $pdf->SetFont("Arial","B",12);
    $pdf->cell(180,30,"$main",1,1);
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(40,10,"Dessert",0,1,"C");
    $pdf->SetFont("Arial","B",12);
    $pdf->cell(180,30,"$dessert",1,1);
    
    $pdf->cell(40,10,"Category",1,0);
    $pdf->cell(30,10,"Per Plate",1,0);
    $pdf->cell(20,10,"NOP",1,0);
    $pdf->cell(50,10,"Total",1,1);
    $pdf->SetFont("Arial","", 16);
    $pdf->cell(40,10,$category,1,0);
    $pdf->cell(30,10,$pp,1,0);
    $pdf->cell(20,10,$nop,1,0);
    $pdf->cell(50,10,$total,1,0);
    
      
      
      
      
      $pdf->Output();
      
  }
 
 
 
 ?>
 


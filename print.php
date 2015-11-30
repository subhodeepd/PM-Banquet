<?php
require("fpdf17/fpdf.php");



$id = $_GET['var'];

$conn = mysql_connect("localhost", "root", "");
mysql_select_db("PM_Banq",$conn);
$qry="SELECT * FROM booking_master WHERE booking_id= '$id'";

$result = mysql_query($qry,$conn);
if(!empty($result)) {
    
    while($row=  mysql_fetch_assoc($result)) {  
    
    $name = $row['name'];
    $title= $row['title'];
    $email = $row['email'];
    $phone = $row['phone'];
    $date = $row['date'];
    $address = $row['address'];
    $event = $row['event_type'];
    $nop = $row['nop'];
    $session = $row['sessions'];
}}

    $pdf = new FPDF();
    $pdf->AddPage();
    
    $pdf->SetFont("Arial","B",60);
    $pdf->cell(180,30,"PM Banquet",1,1,"C");
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(180,10,"Thank You for choosing us.",1,1,"C");
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(180,10,"Booking ID:$id",1,1,"C");
    $pdf->SetFont("Arial","B",16);
    $pdf->cell(40,10,"",0,1);
    $pdf->cell(40,10,"",0,1);
    $pdf->cell(40,10,"Name:",0,0);
    $pdf->cell(40,10,$title.$name,0,1);
    $pdf->cell(40,10,"Contact No:",0,0);
    $pdf->cell(40,10,$phone,0,1);
    $pdf->cell(40,10,"Email",0,0);
    $pdf->cell(40,10,$email,0,1);
    $pdf->cell(40,10,"Address",0,0);
    $pdf->cell(40,10,$address,0,1);
    
    
    
    $pdf->Output();

?>

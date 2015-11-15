<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PM_Banq";

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$nop = $_POST['nop'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO booking_master VALUES ('0','$name','$address',$phone,'$email',$nop)";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
   header("location:index.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>
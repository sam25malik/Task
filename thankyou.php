<?php
 
require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$dob    = $conn->real_escape_string($_POST['u_dob']);
$aadhar = $conn->real_escape_string($_POST['u_aad']);
$area = $conn->real_escape_string($_POST['u_area']);
$amount = $conn->real_escape_string($_POST['u_amount']);



$query   = "INSERT into tb_cform (u_name,u_email,u_dob,u_aad,u_area,u_amount) VALUES('" . $name . "','" . $email . "','" . $dob . "','" . $aadhar . "','" . $area . "','" . $amount . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>
<?php
include 'connect.php';

session_start();

$fname = mysqli_real_escape_string($conn,$_POST['first_name']);
$lname = mysqli_real_escape_string($conn,$_POST['last_name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$account_balance = $_POST['amount'];

$sql="INSERT INTO `customers`(`first_name`,`last_name`,`email_id`,`current_balance`)VALUES ('$fname','$lname','$email','$account_balance')";

$rs = mysqli_query($conn, $sql);
echo "User successfully registered";
?>
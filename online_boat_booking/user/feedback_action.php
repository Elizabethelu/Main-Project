<?php
session_start();
include '../config.php';
$Feedback=$_POST['feedback'];
$Owner_id= $_SESSION['log_id'];
$row="INSERT INTO `boat_booking`.`feedback` (`feedback`, `status`, `user_id`) VALUES ('$Feedback', 'approved', '$Owner_id');";
	mysqli_query($con,$row);
    echo"<script>alert('registration completed');window.location='feedback.php'</script>";
?>
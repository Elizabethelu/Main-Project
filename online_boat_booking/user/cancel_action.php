<?php
include '../config.php';
$id=$_GET['id'];
$sql ="UPDATE boat_booking SET status4='cancel ticket',total=0 where booking_id=$id";
mysqli_query($con,$sql);
echo"<script>alert('cancel booking');window.location.href='initial_payment_list.php';</script>"
?>
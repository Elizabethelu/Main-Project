<?php
include '../config.php';
$id=$_POST['id'];
$amount =$_POST['amount'];
$sql ="UPDATE boat_booking SET status1='initial payment done',initial_amount='$amount' where booking_id=$id" ;
mysqli_query($con,$sql);
echo"<script>alert('initial payment done');window.location.href='initial_payment_list.php';</script>"
?>
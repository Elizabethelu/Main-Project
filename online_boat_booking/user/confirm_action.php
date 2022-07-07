<?php
include '../config.php';
$id=$_POST['id'];
$amount =$_POST['amount'];
$Seat =$_POST['seat'];
$Price =$_POST['price'];
$se="SELECT * FROM boat_booking WHERE booking_id=$id ";
   $r=mysqli_query($con,$se);
   $data=mysqli_num_rows($r);
$Tota = $Seat * $Price ;
$Total= $Tota - 200 ; 
$sql ="UPDATE boat_booking SET status2='final payment done',final_amount='$amount',total='$Total' where booking_id=$id";
mysqli_query($con,$sql);
echo"<script>alert('final payment done');window.location.href='initial_payment_list.php';</script>"
?>
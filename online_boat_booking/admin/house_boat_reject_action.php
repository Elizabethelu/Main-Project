<?php
include '../config.php';
$id=$_GET['boat_id'];
$sql ="UPDATE house_boat SET status2='reject'  where house_boat_id=$id" ;
mysqli_query($con,$sql);
echo"<script>alert('Rejected');window.location.href='index.php';</script>"
?>
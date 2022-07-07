<?php
include '../config.php';
$id=$_GET['boat_id'];
$sql ="UPDATE speed_boat SET status2='approved'  where speed_boat_id=$id" ;
mysqli_query($con,$sql);
echo"<script>alert('approved');window.location.href='index.php';</script>"
?>
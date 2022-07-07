<?php
include '../config.php';
$id=$_GET['boat_id'];
$sql ="UPDATE pedal_boat SET status2='approved'  where pedal_boat_id=$id" ;
mysqli_query($con,$sql);
echo"<script>alert('approved');window.location.href='index.php';</script>"
?>
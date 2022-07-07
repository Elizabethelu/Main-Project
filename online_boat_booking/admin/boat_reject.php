<?php
include '../config.php';
$id=$_GET['id'];
$sql ="UPDATE login SET status='reject' where login_id=$id" ;
mysqli_query($con,$sql);
echo"<script>alert('rejected');window.location.href='view_registerdBoat.php';</script>"
?>
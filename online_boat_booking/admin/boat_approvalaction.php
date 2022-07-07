<?php
include '../config.php';
$id=$_GET['id'];
$randnum = rand(1000,9999);
$sql ="UPDATE login SET status='approved'  where login_id=$id" ;
$sql2 ="UPDATE boat SET randnum='$randnum'  where login_id=$id" ;
mysqli_query($con,$sql);
mysqli_query($con,$sql2);
echo"<script>alert('approved');window.location.href='view_registerdBoat.php';</script>"
?>
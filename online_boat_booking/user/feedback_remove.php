<?php
include '../config.php';
$id=$_GET['id'];
$sql ="UPDATE feedback SET status='reject' where feedback_id=$id" ;
mysqli_query($con,$sql);
echo"<script>alert('rejected');window.location.href='feedback.php';</script>"
?>
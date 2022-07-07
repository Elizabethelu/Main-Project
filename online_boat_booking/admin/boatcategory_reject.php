<?php
include '../config.php';
$id=$_GET['id'];
$sql ="UPDATE boat_category SET status='reject' where category_id=$id" ;
mysqli_query($con,$sql);
echo"<script>alert('rejected');window.location.href='add_boat_category.php';</script>"
?>
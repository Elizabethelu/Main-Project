<?php
include "config.php";

$Fname= $_POST['name'];
$Email= $_POST['email'];
$Address= $_POST['address'];
$Gender= $_POST['gender'];
$Age= $_POST['age'];
$Aadhar= $_POST['aadhar'];
$Phone= $_POST['phone'];
$place= $_POST['place'];
$District= $_POST['district'];
$User_name= $_POST['username'];
$Password= $_POST['password'];
// $Confirm = $_POST['confirm_password'];

$sql="INSERT INTO login(username,password,type,email,status) VALUES('$User_name','$Password','user','$Email','approved')";
mysqli_query($con,$sql);
$sel="SELECT * FROM login WHERE username='$User_name' AND password='$Password'";
$rs=mysqli_query($con,$sel);
$ar=mysqli_fetch_assoc($rs) ;
$logid=$ar['login_id'];
$row= "INSERT INTO `user` (`name`, `phone`, `address`, `email`, `age`, `gender`, `district`, `place`, `aadhar`, `username`, `password`, `image1`, `image2`, `image3`, `login_id`) VALUES ('$Fname', '$Phone', '$Address', '$Email', '$Age', '$Gender', '$District', '$place', '$Aadhar', '$User_name', '$Password', '', '', '', '$logid');";



mysqli_query($con,$row);
echo"<script>alert('registration completed');window.location='login.php'</script>";
?>

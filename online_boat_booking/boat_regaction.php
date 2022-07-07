<?php
include "config.php";

$Fname= $_POST['name'];
$Email= $_POST['email'];
$Aadhar= $_POST['aadhar'];
$Phone= $_POST['phone'];
$img1=$_FILES["image1"]['tmp_name'];
$file_name1=round(microtime(true)*1000).'.jpg';
	move_uploaded_file($img1, 'upload/'.$file_name1);
$User_name= $_POST['username'];
$Password= $_POST['password'];
$Address= $_POST['address'];
$Place= $_POST['place'];
$District= $_POST['district'];

$Id_number= $_POST['id_number'];
$Category= $_POST['category'];



$sql="INSERT INTO login(username,password,type,email,status) VALUES('$User_name','$Password','Boat','$Email','notapproved')";
mysqli_query($con,$sql);
$sel="SELECT * FROM login WHERE username='$User_name' AND password='$Password'";
$rs=mysqli_query($con,$sel);
$ar=mysqli_fetch_assoc($rs) ;
$logid=$ar['login_id'];

$row="INSERT INTO boat(`name`, `address`, `district`, `place`, `phone`, `email`, `image1`, `id_no`, `category`, `username`, `password`, `login_id`) VALUES ('$Fname', '$Address', '$District', '$District', '$Place', '$Email', '$file_name1', '$Id_number', '$Category', '$User_name', '$Password', '$logid');";

// $row= "INSERT INTO `boat_booking`.`user` (`name`, `phone`, `address`, `email`,`username`, `password`, `image1`, `image2`, `image3`, `login_id`, `price`) VALUES ('$Fname', '$Phone', '$Address', '$Email', '$User_name', '$Password', '$file_name1', '$file_name2', '$file_name3', '$logid');";



mysqli_query($con,$row);
echo"<script>alert('registration completed');window.location='login.php'</script>";
?>

<?php
session_start();
include "config.php";

$Email= $_POST['email'];
$Password= $_POST['password'];


$se="SELECT * FROM login WHERE email='$Email'";
   $r=mysqli_query($con,$se);
   $count=mysqli_num_rows($r);
if ($count>0) 
{

	$sql ="UPDATE login SET password='$Password' where email='$Email' " ;
    mysqli_query($con,$sql);
    echo"<script>alert('reset your password successfully');window.location='index.php'</script>";
}
else
{
	
    echo"<script>alert('incorect email or password');window.location='reset_password.php'</script>";

}


?>

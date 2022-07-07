<?php
session_start();
include "config.php";

$Email= $_POST['email'];
$Username= $_POST['username'];


$se="SELECT * FROM login WHERE email='$Email' and username='$Username' ";
   $r=mysqli_query($con,$se);
   $count=mysqli_num_rows($r);
if ($count>0) 
{
    echo"<script>alert('Please reset your password');window.location='reset_password.php'</script>";
}
else
{
	
    echo"<script>alert('incorect email or password');window.location='forgot_password.php'</script>";

}


?>

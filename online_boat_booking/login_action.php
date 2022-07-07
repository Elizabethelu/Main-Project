 
<?php
include 'config.php';

session_start();

$Name = $_POST['username'];
$Password=$_POST['password'];

$sql="select * from login where username='".$Name."' and password='".$Password."'";

$res=mysqli_query($con,$sql);
$data=mysqli_fetch_array($res);
$_SESSION["log_id"]=$data["login_id"];


if ($data['username']== $Name && $data['password'] == $Password )
{

  if($data['type'] == "admin" && $data['status']=="approved" ) 
  {
  
    header("location:admin/index.php");


  }
  elseif($data['type']=="user" && $data['status']=="approved"  )
    {
    
        header("location:user/index.php");
    }
     elseif($data['type']=="Boat" && $data['status']=="approved" )
    {
        
        header("location:boat/index.php");
    }
   
    else
    {
        echo"<script>alert('Not approved'); 
                 window.location.href='index.php';</script>";
    }
}
else
{
    echo"<script>alert('incorrect password'); 
                  window.location.href='login.php';</script>";
}


?>


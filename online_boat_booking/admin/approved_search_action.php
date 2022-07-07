<?php
session_start();
include '../config.php';

$Category= $_POST['category'];


if ($Category=='House Boat.')
   {
		
		echo"<script>window.location='houseboat_approved.php'</script>";
   }
elseif ($Category=='Speed Boat.') 
   {
       
		echo"<script>window.location='speedboat_approved.php'</script>";
   }


else
	{
	    
		echo"<script>window.location='pedalboat_approved.php'</script>";
	}

?>

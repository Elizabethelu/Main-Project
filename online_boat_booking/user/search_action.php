<?php
session_start();
include '../config.php';

$Category= $_POST['category'];


if ($Category=='House Boat.')
   {
		
		echo"<script>window.location='house_boat.php'</script>";
   }
elseif ($Category=='Speed Boat.') 
   {
       
		echo"<script>window.location='speed_boat.php'</script>";
   }


else
	{
	    
		echo"<script>window.location='pedal_boat.php'</script>";
	}

?>

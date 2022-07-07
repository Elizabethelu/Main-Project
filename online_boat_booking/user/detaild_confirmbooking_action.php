<?php
session_start();
include '../config.php';

$Category= $_POST['category'];


if ($Category=='House Boat.')
   {
		
		echo"<script>window.location='houseboat_conform_booking.php'</script>";
   }
elseif ($Category=='Speed Boat.') 
   {
       
		echo"<script>window.location='speedboat_conform_booking.php'</script>";
   }


else
	{
	    
		echo"<script>window.location='pedalboat_conform_booking.php'</script>";
	}

?>

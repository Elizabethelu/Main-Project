<?php
session_start();
include '../config.php';

$Category= $_POST['category'];


if ($Category=='House Boat.')
   {
		
		echo"<script>window.location='view_houseboatbooking.php'</script>";
   }
elseif ($Category=='Speed Boat.') 
   {
       
		echo"<script>window.location='view_speedboatbooking.php'</script>";
   }


else
	{
	    
		echo"<script>window.location='view_pedalboatbooking.php'</script>";
	}

?>

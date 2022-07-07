<?php
session_start();
include "../config.php";

$Fname= $_POST['name'];
$Place= $_POST['place'];
$Address= $_POST['Address'];
$Phone= $_POST['phone'];
$Date= $_POST['date'];
$Time= $_POST['time'];
$Boat_id= $_POST['boat_id'];
$Owner_id= $_POST['owner_id'];
$BoatName= $_POST['boatName'];
$User_id= $_SESSION['log_id'];
$Price= $_POST['price'];
$Food_price= $_POST['food_price'];
$Seat= $_POST['seat'];


$se="SELECT * FROM boat_booking WHERE date='$Date'and boatname='House Boat' ";
   $r=mysqli_query($con,$se);
   $count=mysqli_num_rows($r);
if ($count>0) 
{
    echo"<script>alert('Boat already booked in this date,Take another date');window.location='index.php'</script>";
}
else
{
	$row="INSERT INTO `boat_booking` (`name`, `address`, `phone`, `place`, `user_id`, `date`, `time`, `boat_id`, `owner_id`, `boatname`,  `price`,  `food_price`, `total`, `seat`, `status1`, `status2`, `status3`) VALUES ('$Fname', '$Address', '$Phone', '$Place', '$User_id', '$Date', '$Time', '$Boat_id', '$Owner_id', '$BoatName', '$Price', '$Food_price', '', '$Seat', 'booked', 'null', 'null');";
	mysqli_query($con,$row);
    echo"<script>alert('registration completed');window.location='index.php'</script>";

}


?>

<?php
session_start();
include '../config.php';

$boat_name= $_POST['name'];
$Seats= $_POST['seats'];
$Starting_place= $_POST['starting_place'];
$Ending_place= $_POST['ending_place'];

$Starting_time= $_POST['starting_time'];
$Ending_time= $_POST['ending_time'];
$Package= $_POST['package'];
$Food_price= $_POST['food_price'];
$Price= $_POST['price'];

$Other_details= $_POST['other_details'];
$Owner_id= $_SESSION['log_id'];


// $Categorytype= $_POST['categorytype'];

$img1=$_FILES["image1"]['tmp_name'];
$file_name1=round(microtime(true)*1000).'.jpg';
	move_uploaded_file($img1, 'upload/'.$file_name1);

$img2=$_FILES["image2"]['tmp_name'];
$file_name2=round(microtime(true)*1000).'.jpg';
	move_uploaded_file($img2, 'upload/'.$file_name2);

$img3=$_FILES["image3"]['tmp_name'];
$file_name3=round(microtime(true)*1000).'.jpg';
	move_uploaded_file($img3, 'upload/'.$file_name3);






$sel_boat="SELECT * FROM boat WHERE login_id=$Owner_id ";
$boat_rs=mysqli_query($con,$sel_boat);
$boat_ar=mysqli_fetch_assoc($boat_rs) ;
$category=$boat_ar['category'];

if ($category=='House Boat.')
   {

	$row="INSERT INTO `house_boat` (`boat_name`, `seats`, `starting_place`, `ending_place`, `starting_time`, `ending_time`, `food_package`, `food_price`,  `other_details`, `price`, `image1`, `image2`, `image3`, `status`, `status2`, `owner_id`) VALUES ('$boat_name', '$Seats', '$Starting_place', '$Ending_place', '$Starting_time', '$Ending_time', '$Package', '$Food_price', '$Other_details', '$Price', '$file_name1', '$file_name2', '$file_name3', 'waiting for approvel', 'null','$Owner_id');";





		mysqli_query($con,$row);
		echo"<script>alert('added');window.location='house_boat_details.php'</script>";
   }
else
	{
	   
		echo"<script>alert('This is not your category please select yor category and add details');window.location='index.php'</script>";
	}

?>

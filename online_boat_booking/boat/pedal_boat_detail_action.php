<?php
session_start();
include '../config.php';

$boat_name= $_POST['name'];
$Seats= $_POST['seats'];
$Starting_place= $_POST['starting_place'];
$Ending_place= $_POST['ending_place'];

// $Starting_time= $_POST['starting_time'];
// $Ending_time= $_POST['ending_time'];
// $Package= $_POST['package'];
// $Food_price= $_POST['food_price'];
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

if ($category=='Pedal Boat.')
   {

	$row="INSERT INTO `pedal_boat` (`boat_name`, `starting_place`, `ending_place`, `price`, `seats`, `image1`, `image2`, `image3`, `owner_id`, `other_details`, `status2`, `status`) VALUES ('$boat_name', '$Starting_place', '$Ending_place', '$Price', '$Seats', '$file_name1', '$file_name2', '$file_name3', '$Owner_id', '$Other_details', 'null', 'waiting for approvel');";





		mysqli_query($con,$row);
		echo"<script>alert('added');window.location='house_boat_details.php'</script>";
   }
else
	{
	
		echo"<script>alert('This is not your category please select yor category and add details');window.location='index.php'</script>";
	}

?>

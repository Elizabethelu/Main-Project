<?php 
include '../config.php';

$Categoryname = $_POST['categ'];
$sql ="INSERT INTO `boat_category` (`category_name`, `status`) VALUES ('$Categoryname ', 'approved');";
mysqli_query($con,$sql);

echo"<script>alert('Category added');window.location='add_boat_category.php'</script>";
?>

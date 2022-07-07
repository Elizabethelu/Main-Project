<?php
session_start();
if ($_SESSION) {
  # code...
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Logistica - Shipping Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <?php
    include 'header.php';
    ?>


    <!-- Carousel Start -->
   
    <!-- Carousel End -->


    <!-- About Start -->

    <!-- About End -->


    <!-- Fact Start -->
  
    <!-- Fact End -->
    

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
              
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <h1>Booking Details </h1>
                        <form action="house_boat_bookingaction.php" method="POST" enctype="multipart/form-data" >
                            <div class="row g-3">
                                 <?php
         include '../config.php';
         $id = $_SESSION['log_id'];
         $query="select * from user a, login l where a.login_id = l.login_id and a.login_id = '$id'";
         $result= mysqli_query($con,$query);

         while($data = mysqli_fetch_assoc($result))
         {
         ?>
                                
                                <div class="col-12 col-sm-6">
                                    Name:
                                    <input type="text" value="<?php echo $data['name'];?>" name="name" class="form-control border-0" placeholder="<?php echo $data['name'];?>"  style="height: 55px;" required="">
                                </div>
                                <div class="col-12 col-sm-6">
                                    Address:
                                    <input type="text" value="<?php echo $data['address'];?>"  placeholder="<?php echo $data['address'];?>" name="Address" class="form-control border-0" required=""  style="height: 55px;">
                                </div>
                                

                                <div class="col-12 col-sm-6">
                                    Phone:
                                    <input type="text" value="<?php echo $data['phone'];?>" name="phone" class="form-control border-0" placeholder="<?php echo $data['phone'];?>" style="height: 55px;" required="">
                                </div>
                                <div class="col-12 col-sm-6">   
                                    place:
                                    <input type="text" value="<?php echo $data['place'];?>" name="place" class="form-control border-0" placeholder="<?php echo $data['place'];?>" style="height: 55px;" required="">
                                </div>

                                 <div class="col-12 col-sm-6">
                                    Date:
                                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>

<input id="txtstartdate" style="height: 55px;" name="date"  class="form-control border-0"/>

                                </div>
                                <script type="text/javascript">
                                    $("#txtstartdate").datepicker({
  minDate: 0,
  onSelect: function(date) {
    $("#txtenddate").datepicker('option', 'minDate', date);
  }
});

$("#txtenddate").datepicker({});
                                </script>
                                    
                               <div class="col-12 col-sm-6">
                                    Time:
                                    <input type="time" name="time" class="form-control border-0" placeholder="food price" style="height: 55px;" required="">
                                </div>
                                <div class="col-12 col-sm-6">
                                    Seat:
                                    <input type="numer" name="seat" class="form-control border-0" placeholder="Enter Number of seat" style="height: 55px;" required="">
                                </div>
                                
                                <?php

          include '../config.php';

            
              $id = $_GET['id'];
              $ownerid = $_GET['owner_id'];
              $query="SELECT * FROM house_boat where house_boat_id = $id ";
              $result= mysqli_query($con,$query);


             $data=mysqli_fetch_assoc($result)
              
             
    

       ?>                   
                             <input type="hidden" value="<?php echo $data['house_boat_id'];?>" name="boat_id" class="form-control border-0" placeholder="food price" style="height: 55px;" required="">
                             <input type="hidden" value="<?php echo $data['owner_id'];?>" name="owner_id" class="form-control border-0" placeholder="food price" style="height: 55px;" required="">
                             <input type="hidden" value="House Boat" name="boatName" class="form-control border-0" placeholder="food price" style="height: 55px;" required="">
                              <input type="hidden" value="<?php echo $data['price'];?>" name="price" class="form-control border-0" placeholder="food price" style="height: 55px;" required="">
                               <input type="hidden" value="<?php echo $data['food_price'];?>" name="food_price" class="form-control border-0" placeholder="food price" style="height: 55px;" required="">

                             <p>First pay initial payment 200 ,
                             it is not returnt when you cancel the booking </p>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
             
          ?>
          <?php
              }
          ?>
    <!-- Service End -->




    <!-- Quote Start -->
    
    <!-- Quote End -->



    <!-- Footer Start -->
   <?php include 'footer.php' ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>
<?php
    }
    else {
      header('../location:index.php');
    }
    ?>
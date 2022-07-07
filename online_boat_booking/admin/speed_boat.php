
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
    include 'admin_header.php';
    ?>

    <div >
        <div>
            <div class="owl-carousel-item position-relative">
                <img style="width: 100%;" src="../img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="text-white text-uppercase mb-3 animated slideInDown">SPEED BOAT PANEL</h1>
                               <!--  <h5 class="text-white text-uppercase mb-3 animated slideInDown">𝐇𝐎𝐔𝐒𝐄𝐁𝐎𝐀𝐓</h5> -->
                                <h1 class="display-3 text-white animated slideInDown mb-4">EXPLORE THE BEAUTY OF THE  <span class="text-primary">COCHIN</span> BACKWATERS</h1>
                               <!--  <p class="fs-5 fw-medium text-white mb-4 pb-2">EXPLORE THE BEAUTY OF THE COCHIN BACKWATERS </p> -->
                               <!--  <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carousel Start -->
 
    <!-- Carousel End -->


    <!-- About Start -->

    <!-- About End -->


    <!-- Fact Start -->
  
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              
                <h1 class="mb-5">Boat Details</h1>
            </div>
            <div class="row g-4">







           <?php

          include '../config.php';

              $sid = $_SESSION['log_id'];
              
              $query="SELECT * FROM  speed_boat where status2='null'";
              $result= mysqli_query($con,$query);
              while($data=mysqli_fetch_assoc($result))
              {

       ?>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="../boat/upload/<?php echo $data['image1'];?>" alt="">
                        </div>
                        <h4 class="mb-3"><?php echo $data['boat_name'];?></h4>
                        <p><?php echo $data['other_details'];?></p>
                        <h4>Starting Place:</h4>
                        <p><?php echo $data['starting_place'];?></p>
                        <h4>Ending Place:</h4>
                        <p><?php echo $data['ending_place'];?></p>
                        <a class="btn-slide mt-2" href="more_details_speed_boat.php?boat_id=<?php echo $data['speed_boat_id'];?>"><i class="fa fa-arrow-right"></i><span>View  More Details</span></a>
                        <a class="btn-slide mt-2" href="speed_boat_approvel_action.php?boat_id=<?php echo $data['speed_boat_id'];?>"><i class="fa fa-arrow-right"></i><span>Approve</span></a>
                        <a class="btn-slide mt-2" href="speed_boatboat_reject_action.php?boat_id=<?php echo $data['speed_boat_id'];?>"><i class="fa fa-arrow-right"></i><span>Reject</span></a>
                    </div>
                </div>
                 <?php
              }
          ?>








            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Quote Start -->
    
    <!-- Quote End -->



    <!-- Footer Start -->
   <?php include 'admin_footer.php' ?>


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
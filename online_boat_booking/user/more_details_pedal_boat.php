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
    <div >
        <div>
            <div class="owl-carousel-item position-relative">
                <img style="width: 100%;" src="../img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="text-white text-uppercase mb-3 animated slideInDown">ADMIN PANEL</h1>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">𝐇𝐎𝐔𝐒𝐄𝐁𝐎𝐀𝐓</h5>
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
    <!-- Carousel End -->


    <!-- About Start -->

    <!-- About End -->


    <!-- Fact Start -->
  
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              
                <h1 class="mb-5">Services</h1>
            </div>
            <div class="row g-4">
                <?php

          include '../config.php';

              $sid = $_SESSION['log_id'];
              $id = $_GET['boat_id'];
              
              $query="SELECT * FROM  pedal_boat where  pedal_boat_id=$id";
              $result= mysqli_query($con,$query);
              while($data=mysqli_fetch_assoc($result))
              {

       ?>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="../boat/upload/<?php echo $data['image1'];?>" alt="">
                        </div>
                     <!--    <h4 class="mb-3">Air Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="../boat/upload/<?php echo $data['image2'];?>" alt="">
                        </div>
                     <!--    <h4 class="mb-3">Ocean Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                             <img class="img-fluid" src="../boat/upload/<?php echo $data['image3'];?>" alt="">
                        </div>

                    </div>
                </div>
                
               
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
              
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <h1>View Details</h1>
                        <!-- <form action="House_Boat_details_action.php" method="POST" enctype="multipart/form-data" > -->
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    Boat Name:
                                    <input type="text" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  name="name" class="form-control border-0" placeholder="<?php echo $data['boat_name'];?>" style="height: 55px;" required="" >
                                </div>
                                <div class="col-12 col-sm-6">
                                    Seats Number:
                                    <input type="number" name="seats" class="form-control border-0" placeholder="<?php echo $data['seats'];?>" style="height: 55px;" required="">
                                </div>
                                <div class="col-12 col-sm-6">
                                    Starting Place:
                                    <input type="text"  placeholder="<?php echo $data['starting_place'];?>" name="starting_place" class="form-control border-0" required=""  style="height: 55px;">
                                </div>
                                

                                <div class="col-12 col-sm-6">
                                    Ending Place:
                                    <input type="text" name="ending_place" class="form-control border-0" placeholder="<?php echo $data['ending_place'];?>" style="height: 55px;" required="">
                                </div>
                               <!--  <div class="col-12 col-sm-6">
                                    Starting Time:
                                    <input type="text" name="starting_time" class="form-control border-0" placeholder="<?php echo $data['starting_time'];?>" style="height: 55px;" required="">
                                </div>
                                 <div class="col-12 col-sm-6">
                                    Ending Time:
                                    <input type="text" name="ending_time" class="form-control border-0" placeholder="<?php echo $data['ending_time'];?>" style="height: 55px;" required="">
                                </div> -->
                                    
                              <!--  <div class="col-12 col-sm-6">
                                    Food Package:
                                    <textarea name="package"  class="form-control border-0" placeholder="<?php echo $data['food_package'];?>" style="height: 55px;" required=""></textarea> 
                                </div>
                                
                                <div class="col-12 col-sm-6">
                                    Food Price:
                                    <input type="number" name="food_price" class="form-control border-0" placeholder="<?php echo $data['food_price'];?>" style="height: 55px;" required="">
                                </div> -->
                                <div class="col-12 col-sm-6">
                                    Price:
                                    <input type="number" name="price" class="form-control border-0" placeholder="<?php echo $data['price'];?>" style="height: 55px;" required="">
                                </div>
                                <div class="col-12 col-sm-6">
                                Other Boat Details:
                                    <textarea name="other_details"  class="form-control border-0" placeholder="<?php echo $data['other_details'];?>" style="height: 55px;" required=""></textarea> 
                                </div>
                               
                               
                                  <div class="col-12">
                                     <a href="pedal_boat_booking_details.php?id=<?php echo $data['pedal_boat_id'];?>&&owner_id=<?php echo $data['owner_id'];?>" class="btn btn-primary w-100 py-3" type="submit">book now</a>
                                </div>
                            </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
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
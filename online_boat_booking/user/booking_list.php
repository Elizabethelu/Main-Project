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
    <div style="padding-right:70%; ">
   <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              
                 <table class="table table-bordered table-striped table-hover" style="color:white;" background-color: "white" cellpadding="10"  border=1 align="center">
    <tr style="background-color: skyblue;">
       <th>Name</th><th>Phone</th><th>Address</th><th>Date</th><th>time</th><th>boat</th><th>initial payment status</th><th>initial payment amount</th><th>final payment amount</th><th>Seat No</th><th>Total</th><th>final payment status</th><th>Cancel Ticket</th><th>Cancel</th>
       <th>View Ticket</th>
    </tr>


       <?php

          include '../config.php';

              $sid = $_SESSION['log_id'];
              
              $query="SELECT * FROM  boat_booking where status1='initial payment done' and user_id='$sid'";
              $result= mysqli_query($con,$query);
              while($data=mysqli_fetch_assoc($result))
              {

       ?>

          <tr style="color: black;">
           <td> <?php echo $data['name'];?></td>
             <td><?php echo $data['phone'];?></td>
              <td><?php echo $data['address'];?></td>
               <td><?php echo $data['date'];?></td>
               <td><?php echo $data['time'];?></td>
               <td><?php echo $data['boatname'];?></td>
               <td><?php echo $data['status1'];?></td>
               <td><?php echo $data['initial_amount'];?></td>
               <td><?php echo $data['price'];?></td>
                 <td><?php echo $data['seat'];?></td>
               <td><?php echo $data['total'];?></td>
               <td><?php echo $data['status2'];?></td>
               <td><?php echo $data['status4'];?></td>
           
           

            <td><a class="btn btn-success" href="cancel_action.php?id=<?php echo $data['booking_id'];?>">Cancel</a></td>
            <td><a class="btn btn-success" href="Ticket_booking.php?p_id=<?php echo $data['booking_id'];?>">Ticket</a></td>

           
           
          </tr>
         <?php
              }
          ?>

  </table>
            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Quote Start -->
    
    <!-- Quote End -->



    <!-- Footer Start -->



    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a> -->


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
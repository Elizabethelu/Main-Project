
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
    <style type="text/css">
    

*{
  margin:0;
  padding:0;
}
body{
  height:100vh;
  overflow:hidden;
  background:linear-gradient(-40deg,white,lightgrey);
  box-sizing:border-box;
  font-family: "Montserrat", sans-serif;
}
#wrapper{
  height:480px;
  width:700px;
  background:#fff;
  border:1px solid grey;
  border-radius:10px;
  margin:3em auto 0 auto;
  overflow:hidden;
  box-shadow:0px 2px 25px #000;
}
.row{
  display:flex;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5{
  display:flex;
  flex-direction:column;
  align-items:center;
  background:#e6e6e6;
/*   border:solid 1px transparent; */
  border-radius:4px;
  margin:1em 5px;
}
.row:nth-of-type(1) .col-xs-5 #cards{
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5 #cards img{
  width:100px;
  height:100px;
}

.row:nth-of-type(2) .col-xs-5{
  display:flex;
  flex-direction:column;
  justify-content:space-around;
  flex-basis:45%;
}
.row:nth-of-type(2) .col-xs-5 input{
  border:2px solid lightgrey;
  height:35px;
  border-radius:10px;
  padding-left:10px;
}
.row .col-xs-5 input:focus, .row:nth-of-type(3) .col-xs-2 input:focus{
  border-color:green;
  outline:0;
}
label{
  position:relative;
}
 .fa{
  position:absolute;
  right:25px;
  bottom:10px;
}
.row-three{
  display:flex;
  justify-content:space-around;
  align-items:baseline;
  align-content:space-between;
  margin:2em 1em 2.4em 1em;
}
.row:nth-of-type(3) .col-xs-2{
  flex-basis:50%;
}
.row:nth-of-type(3) .col-xs-5{
  flex-basis:40%;
  align-items:baseline;
}
.row:nth-of-type(3) .col-xs-2 input{
  height:35px;
  border:2px solid lightgrey;
  border-radius:10px;
  padding-left:10px;
}
.row:nth-of-type(3) .col-xs-5 .small{
  font-size:.70em;
}
footer{
  height:80px;;
  background:#e6e6e6;
  display:flex;
  flex-direction:row;
  justify-content:space-between;
  align-items:center;
}
footer .btn{
  margin:50px 15px 55px 15px;
  border-radius:20px;
  padding:.65em 1.6em;
}
footer :nth-child(1){
  background-color:#fff;
  color:#f62f5e;
}
footer :nth-child(2){
  background-color:#f62f5e;
  color:#fff;
}
.col-xs-5.highlight{
  border:solid 1px blue;
}
</style>
</head>

<body>
    <!-- Spinner Start -->
    <?php
    include 'header.php';
    ?>


    <!-- Carousel Start -->

<!-- <h1>Payment</h1> -->
<div style="padding-bottom: : "></div>
 <form action="confirm_action.php" method="POST">
                    


<div id="wrapper">
  <div class="row">
    <div class="col-xs-5">
      <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
  <label class="form-check-label" for='card'>
    <input id="card" class="form-check-input" type="checkbox" value="">
    Pay &#8377;200 with credit card
  </label>
</div>
    </div><!--col-xs-5 end-->
    <div class="col-xs-5">
      
     
    </div><!--col-xs-5 end-->
  </div><!--row end-->
 
  <div class="row">
    <div class="col-xs-5">
      <i class="fa fa fa-user"></i>
      <label for="cardholder">Cardholder's Name</label>
      <input type="text" name="name" id="cardholder" required="">
    </div><!--col-xs-5-->
    <div class="col-xs-5">
      <i class="fa fa-credit-card-alt"></i>
      <label for="cardnumber">Card Number</label>
      <input type="number" id="cardnumber" name="number" required patern ="[0-9]{14}" >
  </div>
    <div class="col-xs-5">
      <i class="fa fa-calendar"></i>
      <label for="date">Valid To</label>
      <input type="date" placeholder="MM/YY" id="date" required="">
    </div>
    <div class="col-xs-5">
      <i class="fa fa-lock"></i>
      <label for="date">CVV / CVC *</label>
      <input type="password" required patern ="[0-9]{3}" >
    </div><!--col-xs-3-->
    <div class="col-xs-5">
        <p>First pay initial payment 200 ,
                             it is not returnt when you cancel the booking </p>
     <!--  <span class="small">* CVV or CVC is the card security code, unique three digits number on the back of your card seperate from its number.</span> -->
    </div><!--col-xs-6 end-->
  </div><!--row end-->
     <?php

          include '../config.php';

            
              $id = $_GET['id'];
             
              $query="SELECT * FROM boat_booking  where booking_id = $id ";
              $result= mysqli_query($con,$query);


             $data=mysqli_fetch_assoc($result)
              
             
    

       ?>
       <input type="hidden" name='id' value="<?php echo $data['booking_id'];?>">
       <input type="hidden" name='seat' value="<?php echo $data['seat'];?>">
       <input type="hidden" name='price' value="<?php echo $data['price'];?>">
       <input type="hidden" name='amount' value="200">
       <?php
             
          ?>

  
    <button type="submit" class="btn btn-primary w-100 py-3">Pay now</button>
    
 
</div><!--wrapper end-->
</form>
<br>
<br>
<br>
<br>
<br>
<br>

    <!-- Carousel End -->


    <!-- About Start -->

    <!-- About End -->


    <!-- Fact Start -->
  
    <!-- Fact End -->


    <!-- Service Start -->
 




 





            </div>
        </div>
    </div>
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
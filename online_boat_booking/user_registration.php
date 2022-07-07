<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Logistica - Shipping Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
                <img style="width: 100%;" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
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





    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
              
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <h1>Register Here</h1>
                        <form action="user_registration_action.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  name="name" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">

                                    <input type="text" pattern="[6-9]{1}[0-9]{9}" placeholder="Your phone number.." name="phone" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                
<script type="text/javascript">
    function AadharValidate() {
        var aadhar = document.getElementById("txtAadhar").value;
        var adharcardTwelveDigit = /^\d{12}$/;
        var adharSixteenDigit = /^\d{16}$/;
        if (aadhar != '') {
            if (aadhar.match(adharcardTwelveDigit)) {
                return true;
            }
            else if (aadhar.match(adharSixteenDigit)) {
                return true;
            }
            else {
                alert("Enter valid Aadhar Number");
                return false;
            }
        }
    }
</script>
                                <div class="col-12 col-sm-6">
                                    <input type="number" type="text" id="txtAadhar" onblur="AadharValidate();"  name="aadhar" class="form-control border-0" placeholder="Your Aadhar" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="number" name="age" class="form-control border-0" placeholder="Your Age" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                   <select name="gender" class="form-select border-0" style="height: 55px;">
                                         <option>Gender</option>
                                         <option value="Other.">Other.</option>
       <option value="Femaile.">Female.</option>
       <option value="Maile.">Male.</option>
      
                                    </select>   
                                </div>
                               <div class="col-12 col-sm-6">
                                    <input type="text" name="address" class="form-control border-0" placeholder="Your address" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="district" class="form-select border-0" style="height: 55px;">
                                         <option>District</option>
                                         <option value="Kannur.">Kannur.</option>
       <option value="Kasaragod.">Kasaragod.</option>
       <option value="Kollam.">Kollam.</option>
       <option value="Kottayam.">Kottayam.</option>
       <option value="Kozhikode.">Kozhikode.</option>
       <option value="Malappuram.">Malappuram.</option>
       <option value="Palakkad.">Palakkad.</option>
       <option value="Pathanamthitta.">Pathanamthitta.</option>
       <option value="Alappuzha">Alappuzha</option>
       <option value="Ernakulam">Ernakulam</option>
       <option value="Idukki">Idukki</option>
       <option value="Thiruvananthapuram">Thiruvananthapuram</option>
       <option value="Thrissur">Thrissur</option>
       <option value="Wayanad">Wayanad</option>

                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="place" class="form-control border-0" placeholder="Your place" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="username" class="form-control border-0" placeholder="Your User Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" class="form-control border-0" placeholder="Your Password" style="height: 55px;">
                                </div>
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
    <script src="js/main.js"></script>
</body>

</html>
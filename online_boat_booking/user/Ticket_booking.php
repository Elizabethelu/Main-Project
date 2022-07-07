<?php
session_start();
if ($_SESSION) {
  # code...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Services</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: transparent;
  color: #051922;
}
        body {      
            font-family: Verdana;
        }
        
        div.invoice {
        border:1px solid #ccc;
        padding:1px;
        height:340pt;
        width:470pt;

        }

        div.company-address {
            border:1px solid #ccc;
            float:left;
            width:200pt;
        }
        
        div.invoice-details {
            border:1px solid #ccc;
            float:right;
            width:200pt;
        }
        
        div.customer-address {
            border:1px solid #ccc;
            float:right;
            margin-bottom:50px;
            margin-top:100px;
            width:200pt;
        }
        
        div.clear-fix {
            clear:both;
            float:none;
        }
        
        table {
            width:100%;
        }
        
        th {
            text-align: left;
        }
        
        td {
        }
        
        .text-left {
            text-align:left;
        }
        
        .text-center {
            text-align:center;
        }
        
        .text-right {
            text-align:right;
        }
</style>
</head>
<body>



    <div id="canvas_div_pdf" style="margin-top: 90px;margin-bottom: 90px;text-align: center;border-style: solid; padding:40px;padding-top: 150px;padding-bottom: 150px;">
<div>
 <!-- <h6><img src="assets/img/company-logos/logo.png" width="100px" height="80px" alt=""></h6> -->

<div class="invoice">
     <?php
  include '../config.php';

  $p_id = $_GET['p_id'];
  $query="SELECT * FROM  boat_booking where status1='initial payment done'  and booking_id = '$p_id' ";
    $result= mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($result);
 


?>
        <div class="company-address">
           
            Name:- <?php echo $data['name'];?>
            <br />
            Address:- <?php echo $data['address'];?>
            <br />
            Phone:- <?php echo $data['phone'];?>
            <br />
            Date:- <?php echo $data['date'];?>
            <br />
            Time:- <?php echo $data['time'];?>
            <br />
        </div>
        <div class="company-address">
            Kochi
            <br />
            489 Road Street
            <br />
            AF3Z 7BP
            <br />
       
        </div>


        
       
        
        <div class="customer-address">
            <h2><?php echo $data['boatname'];?>Ticket</h2>
        </div>
       
        
        <div class="clear-fix"></div>
            <table border='1' cellspacing='0'>
                <tr>
                    <th width=250>Seat</th>
                    <th width=80>price</th>
                    <th width=80>initial paiment</th>
                    <th width=100>Total price</th>
                </tr>
                <tr>
                     <td><?php echo $data['seat'];?></td>
                     <td><?php echo $data['price'];?></td>
                     <td><?php echo $data['initial_amount'];?></td>
                    <td><?php echo $data['total'];?></td>
                </tr>

            
            </table>
        </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>


<script>

 var element = document.getElementById('canvas_div_pdf');
html2pdf(element, {
  margin:       10,
  filename:     'myfile.pdf',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 2, logging: true, dpi: 192, letterRendering: true },
  jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
});
</script>

</div>

    



    



    
    <!-- jquery -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

</body>
</html
<?php
    }
    else {
      header('../location:index.php');
    }
    ?>
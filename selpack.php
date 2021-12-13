<?php
session_start();
require("db.class.php");
$ob=new db_operations();
$user=$_SESSION['userid'];
$date=Date("d/m/Y");
//query section//
$mem="select * from package";
//query execution//
$res_mem=$ob->db_read($mem);
$res_mem2=mysqli_fetch_array($res_mem);

$_SESSION['user'];
$_SESSION['name'];
$_SESSION['age'];
$_SESSION['sex'];
$_SESSION['pic'];
$_SESSION['type'];
$_SESSION['relation'];
$_SESSION['reason'];
$_SESSION['date'];




?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Groovin Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> =======================================================
  * Template Name: Groovin - v4.6.0
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<style>

    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 3px solid #ccc;
      -webkit-transition: 0.5s;
      transition: 0.5s;
      outline: none;
    }

    input[type=text]:focus {
      border: 3px solid #555;
    }



    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 3px solid #ccc;
      -webkit-transition: 0.5s;
      transition: 0.5s;
      outline: none;
    }

    input[type=password]:focus {
      border: 3px solid #555;
    }


    input[type=email] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 3px solid #ccc;
      -webkit-transition: 0.5s;
      transition: 0.5s;
      outline: none;
    }

    input[type=email]:focus {
      border: 3px solid #555;
    }


    input[type=file] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 3px solid #ccc;
      -webkit-transition: 0.5s;
      transition: 0.5s;
      outline: none;
    }

    input[type=file]:focus {
      border: 3px solid #555;
    }


    </style>
</head>

<body>

  <!-- ======= Header ======= -->






    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Packages</h2>


        <div class="row">


        <?php
        for($i=1;$i<mysqli_num_rows($res_mem);$i++)
{
$data=mysqli_fetch_assoc($res_mem);
$sel2="select * from packagedetails where id='$data[id]'";
//echo $sel2;
$res_mem3=$ob->db_read($sel2);
$data2=mysqli_fetch_array($res_mem3);


?>



          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3><?php echo $data['name'];?></h3>
              <h4><sup>Rs</sup><?php echo $data['rate'];?><span> / year</span></h4>
              <ul>
                <li><?php echo $data2['checkup'];?> Checkups</li>
                <li><?php echo $data2['room'];?> Rooms</li>
                <li><?php echo $data2['food'];?> Food</li>

              </ul>
              <div class="btn-wrap">
                <a href="http://localhost/oldage/admin/BS3/addmember2.php?id=<?php echo $data['id'];?>&nm=<?php echo $data['name'];?>" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
          <?php
          }
           ?>

        </div>





      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

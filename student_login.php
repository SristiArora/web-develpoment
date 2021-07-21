<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dues Notification System - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/parking-tickets.png" rel="icon">
  <link href="assets/img/parking-tickets.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700"">
  <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v1.1.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    
    @media (max-width: 1200px) {
      .User-ID {
          width: 40%;
      }
      .Password {
          width: 40%;
      }
    }
    @media (min-width: 1200px) {
      .User-ID {
          width: 100%;
      }
      .Password {
          width: 100%;
      }
    }
    @media (max-width: 768px) {
      .User-ID {
          width: 70%;
          margin-left: 15%;
      }
      .Password {
          width: 70%;
          margin-left: 15%;
      }
    }
    .form-control {
      border-color: grey;
    }



    main {
      min-width: 320px;
      max-width: 800px;
      padding: 50px;
      margin: 0 auto;/*
      background: #fff;*/
    }

    section {
      display: none;
      padding: 20px 0 0;
      border-top: 1px solid #ddd;
    }

    input {
      display: none;
    }

    label {
      display: inline-block;
      margin: 0 0 -1px;
      padding: 15px 25px;
      font-weight: 600;
      text-align: center;
      color: #bbb;
      border: 1px solid transparent;
    }

    label:before {
      font-family: fontawesome;
      font-weight: normal;
      margin-right: 10px;
    }

    label[for*='1']:before {
      content: '\f1cb';
    }

    label[for*='2']:before {
      content: '\f17d';
    }

    label[for*='3']:before {
      content: '\f16b';
    }

    label[for*='4']:before {
      content: '\f1a9';
    }

    label:hover {
      color: #888;
      cursor: pointer;
    }

    input:checked + label {
      color: #555;
      border: 1px solid #ddd;
      border-top: 2px solid orange;
      border-bottom: 1px solid #fff;
      background-color: white;
    }

    #tab1:checked ~ #content1,
    #tab2:checked ~ #content2,
    #tab3:checked ~ #content3,
    #tab4:checked ~ #content4 {
      display: block;
    }

    @media screen and (max-width: 650px) {
      label {
        font-size: 0;
      }

      label:before {
        margin: 0;
        font-size: 18px;
      }
    }
    @media screen and (max-width: 400px) {
      label {
        padding: 15px;
      }
    }


  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.php">Dues Notification System<span>.</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/parking-tickets.png" alt=""></a>-->

          
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-5" style="background-color: rgb(0,0,0); background-color: rgba(0,0,0, 0.4); padding: 10px; border-radius: 10px;">

              <div style="margin-bottom: 10px; color: white">Student Login</div>
              <form>
                            <div>
                              <div style="margin-bottom: 10px">
                                <input type="text" class="form-control User-ID" placeholder="Card Number" name="CardNo">
                              </div>
                              <div>
                                <input type="password" class="form-control Password" placeholder="Password" name="Student_Password">
                              </div>
                            </div>
                            <input type="submit" value="Student Login" class="btn btn-danger" style="margin-top: 10px;background-color: #52755b;border-color: #374f3d;">
                            <?php
                              if(isset($_REQUEST['CardNo']) && isset($_REQUEST['Student_Password']))
                              {
                                    $CardNo=$_REQUEST['CardNo'];
                                    $Student_Password=$_REQUEST['Student_Password'];

                                    $con=mysqli_connect('localhost','root','','minor-project(Fine Alert System)');
                                    $q="select * from student where CardNo='$CardNo' and Password='$Student_Password'";
                                    $rs=mysqli_query($con,$q);

                                    if($rs)
                                    { 
                                      session_start();
                                      $_SESSION['CardNo']=$CardNo;
                                      // $_SESSION['$Student_Password']=$Student_Password;
                                      echo "<script>window.location='student.php'</script>";
                                    }

                                    else
                                      echo "<script>window.location='index.php'</script>";
                              }
                              
                            ?>
                          </form>
              <div>
                <p style="color: white; margin-top: 20px;">Student, Haven't Registered?</p>
                <p style="margin-top: -20px;"><a href="register.php">Register Yourself</a></p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <script>
        function Check() {
          var str = "BE20170016";
          var n = str.includes("BE");
          document.getElementById("demo").innerHTML = n;
        }
    </script>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
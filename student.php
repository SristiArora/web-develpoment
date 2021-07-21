  <?php
    session_start();
    $Card_No=$_SESSION['CardNo'];
    if($Card_No)
    {
    }
    else
    echo "<script>window.location='logout.php'</script>";
  ?>

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dues Notification System - Student</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <link href="assets/img/parking-tickets.png" rel="icon">
  <link href="assets/img/parking-tickets.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
    
    
    @media (max-width: 768px) {
      .student-fine {
        font-size: 10px;
      }
      .student-details {
        font-size: 13px;
      }

      .Balance {
        font-size: 15px;
      }
      .student-detail {
        color: white; 
        text-align: left;
        margin-bottom: 20px; 
        margin-top: 65px;
      }
    }

    @media (min-width: 769px) {
      .student-details {
        width: 40%;
        margin-left: 30%;
      }
      .student-detail {
        text-align: center;
        color: white;
        margin-top: 60px;
      }
      .student-fine {
        font-size: 10px;
      }
    }

    @media (min-width: 1200px) {
      .student-fine {
        font-size: 11px;
      }
      .student-detail {
        width: 160%;
        margin-left: -30%;
      }
    }
    .form-control {
      border-color: grey;
    }

    nav.mobile-nav.d-lg-none {
        height: 105px;
    }

    table tbody { display:block; max-height:450px; overflow-y:scroll; }
    table thead, table tbody tr { display:table; width:100%; table-layout:fixed; }

    tbody {
      height: 150px;
    }

    .resume{
      display: none;
    }

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a>Dues Notification System<span>.</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a data-toggle="modal" href="#myModal">Edit Info</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </nav>

          <!-- <a data-toggle="modal" href="#myModal">Open Modal</a> -->

          <!-- <a href="#about" class="get-started-btn scrollto">Logout</a> -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style=""><!-- overflow: scroll; -->

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-top: 55px">
        <div class="modal-header">
          <h4 class="modal-title">Edit Info</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>
            <form>
              <?php
                session_start();
                $con=mysqli_connect('localhost','root','','Minor-Project(Fine Alert System)');
                // $Card_No=$_SESSION['CardNo'];
                $q1="select *from student where CardNo='$Card_No'";
                $rs1=mysqli_query($con,$q1);

                while($row=mysqli_fetch_array($rs1))
                {


                  echo"<p>
                        <div class='alert alert-danger' role='alert'>
                          <u>NOTE</u>:- Your <b>NAME, BRANCH</b> will be edited from the <b><u>STUDENT SECTION</u></b> only.
                        </div>
                      </p>
                      <form>
                          <div style='margin-bottom: 10px'>
                            <input type='text' class='form-control' placeholder='Mobile Number' value='$row[MobileNo]' id='zip_code' name='MobileNo' onkeypress='return event.charCode > 47 && event.charCode < 58;' pattern='[0-9]{10}'>
                          </div>

                          <div style='margin-bottom: 10px'>
                            <input type='Submit' class='btn btn-success' value='Edit'>
                            <input type='reset' class='btn btn-danger' value='Reset'>
                          </div>";
                  }
                  ?>
              </form>

                  <?php
                    if(isset($_REQUEST['MobileNo']))
                    {
                        $MobileNo=$_REQUEST['MobileNo'];
                        
                         // $Card_No=$_SESSION['CardNo'];
                        $q2="update student set MobileNo='$MobileNo' where CardNo='$Card_No'";
                        $rs2=mysqli_query($con,$q2);

                        if($rs2)
                        {
                          echo "Done";
                        }
                    }
                  ?>
              <div style="margin-bottom: 10px;">
                <a href="#expe1" class="fa fa fa-times closer" >Change Password</a>
                <div class="resume" id="expe1" style="margin-top: 10px"> 
                  <form> 
                      <div style="margin-bottom: 10px">
                        <input type="password" class="form-control" data-strength placeholder="Password" name="Password" style="margin-bottom: 10px">
                      </div>
                      <div style="margin-bottom: 10px">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="Confirm-Password">
                      </div>
                      <div style="margin-bottom: 10px">
                        <input type="Submit" class="btn btn-success" value="Change Password">
                      </div>
                      <?php
                        if(isset($_REQUEST['Password']) && isset($_REQUEST['Confirm-Password']))
                        {
                            $Password=$_REQUEST['Password'];
                            $Confirm_Password=$_REQUEST['Confirm-Password'];
                            $Card_No=$_SESSION['CardNo'];

                            if(!strcmp($Confirm_Password,$Password))
                            {
                              $q3="update student set Password='$Password' where CardNo='$Card_No'";
                              $rs3=mysqli_query($con,$q3);

                              if($rs3)
                              {
                                echo "Done";
                              }
                            }
                        }
                      ?>
                  </form>
                </div>
              </div>
            </form>
          </p>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-xl-6" style="margin-top: 50px">
              <div class="student-detail">
                <?php
                  if(isset($_SESSION['CardNo']))
                  {
                    $Card_No=$_SESSION['CardNo'];
                    $q2="select * from student where CardNo='$Card_No' ";
                    $rs2=mysqli_query($con,$q2);

                    while($row=mysqli_fetch_array($rs2))
                    {
                      echo"<div>
                        Card Number
                        <input type='text' class='form-control student-details' disabled value='$Card_No' name=''>
                      </div>
                      <div>
                        Name
                        <input type='text' class='form-control student-details' disabled value='$row[User_Name]' name=''>
                      </div>
                      <div>
                        Branch
                        <input type='text' class='form-control student-details' disabled value='$row[Branch]' name=''>
                      </div>";
                  }
                }
                ?>
              </div>
                <table class='table table-bordered table-dark student-fine' style='border-radius: 10px; margin-top: 20px'>
                  <thead style="text-align: center;">
                    <tr>
                      <th>Fine type</th>
                      <th>Amount (Rupees)</th>
                      <th>Last Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        if(isset($_SESSION['CardNo']))
                        {
                          $Card_No=$_SESSION['CardNo'];
                          $con=mysqli_connect('localhost','root','','minor-project(Fine Alert System)');
                          $q3="select * from fine where CardNo='$Card_No' and Status='Un-Paid' ORDER BY id DESC";
                          $rs3=mysqli_query($con,$q3);

                          while($row=mysqli_fetch_array($rs3))
                          {
                            echo"<tr style='text-align: center'>
                                    <td>$row[Fine_Type]</td>
                                    <td>$row[Actual_Amount]</td>
                                    <td>$row[Last_Date]</td>
                                    <td style='text-align: center'>$row[Status]</td>
                                  </tr>";
                          }


                          $q4="select * from fine where CardNo='$Card_No' and Status='Paid' ORDER BY id DESC";
                          $rs4=mysqli_query($con,$q4);

                          while($row=mysqli_fetch_array($rs4))
                          {
                            echo"<tr style='text-align: center'>
                                    <td>$row[Fine_Type]</td>
                                    <td>$row[Actual_Amount]</td>
                                    <td>$row[Last_Date]</td>
                                    <td><p style='text-align: center'>Paid On<br>$row[On_Date]</p></td>
                                  </tr>";
                          }
                        }
                    ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  </section><!-- End Hero -->

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[href^="#"]').on('click', function(event) {

          var target = $( $(this).attr('href') );
          target.fadeToggle(100);
          /*if( target.length ) {
              event.preventDefault();
              $('html, body').animate({
                  scrollTop: target.offset().top
              }, 2000);
          }*/

      });
      });
  </script>

  <script>
    function autoRefreshPage()
    {
          window.location = window.location.href;
        
    }
    setInterval('autoRefreshPage()', 60000);
  </script>

</body>

</html>
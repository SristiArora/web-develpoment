<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dues Notification System - Register Yourself</title>
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
    
    @media (max-width: 530px)
    {
      .register {
        width: 100%;
      }
    }

    @media (min-width: 530px)
    {
      .register {
        width: 50%;
        /*margin-left: 10px;*/
      }
    }

    @media (min-width: 1200px)
    {
      .register {
        width: 100%;
      }
    }
    
    .strength{
      height:0px;
      width:100%;
      background:#ccc;
      margin-top: -7px;
      border-bottom-left-radius: 4px;
      border-bottom-right-radius: 4px;
      overflow: hidden;
      transition: height 0.3s;
    }

lable:before {
  content: "\f070";
  color: #aaa;
  font-size: 22px;
  font-family: FontAwesome;
  position: absolute;
  right: 25px;
  top: 44px;
}

.progress-bar_wrap {
  width: 387px;
  height: 5px;
  background: #F6F6FA;
  display: inline-block;
  vertical-align: middle;
  overflow: hidden;
  border-radius: 5px;
  margin-top: -20px;
}



.register .progress-bar_item {
  display: inline-block;
  height: 100%;
  width: 33.33%;
  float: left;
  visibility: hidden;
  transition: background-color .2s, visisility .1s;
}

.register .active {
  visibility: visible;
}

.progress-bar_item-1 {
  
}

.progress-bar_item-2 {

}

.progress-bar_item-3 {

}

.progress-bar_text {
  display: inline-block;
  color: #aaa;
  margin-left: 5px;
  transition: .2s;
}



.form-2 .progress-bar_item {
  display: inline-block;
  height: 100%;
  width: 32.5%;
  margin-right: .8%;
  border-radius: 5px;
  float: left;
  
  transition: background-color .2s, visisility .1s;
}

.form-2 .progress-bar_item-1.active {
  background-color: #FF4B47;
}

.form-2 .progress-bar_item-2.active {
  background-color: #F9AE35;
}

.form-2 .progress-bar_item-3.active {
  background-color: #2DAF7D;
}

.MobileNo {
  width: 70%;
  float: left;
  margin-right: 2%;
}

.form-control {
  border-color: grey;
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
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

          
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row"> <!-- 
            <div class="col-xl-4"></div> -->
            <div class="col-xl-4 register" style="background-color: #f0f0f0; padding: 10px">
              <form class="register">
                     <div style="margin-bottom: 10px">
                       <input type="text" class="form-control" placeholder="Student Name" name="UserName" id="UserName">
                     </div>
                     <div style="margin-bottom: 10px">
                       <input type="text" class="form-control" placeholder="Student ID" name="User-ID" id="UserID">
                     </div>
                     <div style="margin-bottom: 10px">
                       <select class="form-control" name="Branch" id="Branch">
                          <option disabled="" selected="">Branch</option>
                          <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                          <option value="Electronics and Tele-Communication">Electronics and Tele-Communication</option>
                          <option value="Information Technology">Information Technology</option>
                          <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                          <option value="Electrical Engineering">Electrical Engineering</option>
                          <option value="Civil Engineering">Civil Engineering</option>
                          <option value="Mechanical Engineering">Mechanical Engineering</option>
                       </select>
                     </div>
                     <div style="margin-bottom: 10px">
                        <select class="form-control" name="Semester" id="Semester">
                          <option disabled="" selected="">Semester</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                        </select>
                      </div>
                      <div style="margin-bottom: 10px">
                        <input type="text" class="form-control" placeholder="Section" name="Section" id="Section">
                      </div>
                     <div style="margin-bottom: 10px">
                        <input type="text" class="form-control MobileNo" placeholder="Mobile Number" id="zip_code" name="MobileNo" onkeypress="return event.charCode > 47 && event.charCode < 58;" pattern="[0-9]{10}" maxlength="10" onkeyup="check()">
                        <input type="button" class="btn btn-danger OTPChecker" value="Send OTP" id="OTP" style=" margin-bottom: 0px" onclick="sendOTP()" disabled>
                     </div>
                     <div style="margin-bottom: 10px; display: none;" id="OTP_field">
                        <input type="text" class="form-control" style="width: 170px; float: left; margin-top: 10px; margin-bottom: 10px;" maxlength="6" id="OTPno">
                        <input type="button" class="btn btn-primary" value="Verify" id="verified" style="margin-left: 5px;" onclick="verify()">
                     </div>

                     <br><br>

                     <div style="margin-bottom: 10px">
                       <input type="Submit" class="btn btn-success" value="Register" id="register" disabled>
                       <input type="reset" class="btn btn-danger" value="Reset">
                     </div>
                     <?php
                        if(isset($_REQUEST['UserName']) && isset($_REQUEST['User-ID']) && isset($_REQUEST['Branch']) && isset($_REQUEST['Semester']) && isset($_REQUEST['Section']) && isset($_REQUEST['MobileNo']))
                        {
                          $User_Name=$_REQUEST['UserName'];
                          $User_ID=$_REQUEST['User-ID'];
                          $Branch=$_REQUEST['Branch'];
                          $Semester=$_REQUEST['Semester'];
                          $Section=$_REQUEST['Section'];
                          $MobileNo=$_REQUEST['MobileNo'];
                          $issued='Not Issued';


                              $con=mysqli_connect('localhost','root','','Minor-Project(Fine Alert System)');

                              $q1="select * from card where Card_Status='Not Issued'";
                              $rs1=mysqli_query($con,$q1);

                              if($row=mysqli_fetch_array($rs1))
                              {
                                $i=0;
                                if($i==0)
                                {
                                  $CardNo=$row['CardNo'];
                                  

                                  function password_generate($chars) 
                                  {
                                    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
                                    return substr(str_shuffle($data), 0, $chars);
                                  }
                                  $password=password_generate(7);
                                  

                                  $q="insert into student values('NULL','$User_ID','$User_Name','$Branch','$Semester','$Section','$MobileNo','$CardNo','$password')";

                                  $rs=mysqli_query($con,$q);

                                  if($rs)
                                  {
                                    $fields = array(
                                        "sender_id" => "FSTSMS",
                                        "message" => "Your Card is been issued. Use the card number and password to login. Card Number= $CardNo Password= $password. Please change the password once you have logged in.",
                                        "language" => "english",
                                        "route" => "p",
                                        "numbers" => "$MobileNo",
                                        "flash" => "1"
                                    );

                                    $curl = curl_init();

                                    curl_setopt_array($curl, array(
                                      CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
                                      CURLOPT_RETURNTRANSFER => true,
                                      CURLOPT_ENCODING => "",
                                      CURLOPT_MAXREDIRS => 10,
                                      CURLOPT_TIMEOUT => 30,
                                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                      CURLOPT_CUSTOMREQUEST => "POST",
                                      CURLOPT_POSTFIELDS => json_encode($fields),
                                      CURLOPT_HTTPHEADER => array(
                                        "authorization: aNtKDPGpIERhZOd6eCz0jTYwM5rBFcvq4U18Qbf97LkHsWSuxlK0Gwn3rQEoSOubRzhy47NXCDLTHiAF",
                                        "accept: /",
                                        "cache-control: no-cache",
                                        "content-type: application/json"
                                      ),
                                    ));

                                    $response = curl_exec($curl);
                                    $err = curl_error($curl);

                                    curl_close($curl);

                                    if ($err) {
                                      echo "cURL Error #:" . $err;
                                    } else {
                                      echo $response;
                                    }
                                      echo "<p style='color: white'>You have been registered...</p>";
                                      $q2="update card SET Card_Status='Issued' WHERE CardNo='$CardNo'";
                                      $rs2=mysqli_query($con,$q2);

                                      if($rs2)
                                      {
                                        
                                        echo "<script>alert('You have been registered')</script>";

                                        $message=("Your Card is been issued. Use the card number and password to login. Card Number= \"$CardNo\" Password= \"$password\". Please change the password once you have logged in");
                                        

                                        echo "<script>window.location='index.php'</script>";
                                      }
                                      
                                  }
                                  else
                                    echo "<p style='color: white'>Something Went Wrong...</p>";    
                                }
                              }
                              else
                              {
                                echo "<script>alert('There are no cards to issue. Contact student section for more help.')</script>";
                              }
                              
                          }
                          else
                          {
                            echo "<script></script>";
                          }
                        
                    ?>
               </form>
            </div>
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

  <script>
    $(document).ready(function(){
  
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

})
  </script>

  <script>
     
     function student() {

        document.getElementById("main").style.marginTop = "55px";
     } 
     function admin() {

        document.getElementById("main").style.marginTop = "-140px";
     } 

  </script>

  <script type="text/javascript">
    $( document ).ready(function() {
        
        const changeText = function (el, text, color) {
          el.text(text).css('color', color);
        };
        
        $('.password').keyup(function(){
          let len = this.value.length;
          const pbText = $('.register .progress-bar_text');

          if (len === 0) {
            $('.register .progress-bar_item').each(function() {
              $(this).removeClass('active')
            });
            $('.register .active').css('background-color', 'transparent');
            changeText(pbText, 'Password is blank');
          } else if (len > 0 && len <= 4) {
            $('.register .progress-bar_item-1').addClass('active');
            $('.register .progress-bar_item-2').removeClass('active');
            $('.register .progress-bar_item-3').removeClass('active');
            $('.register .active').css('background-color', '#FF4B47');
            changeText(pbText, 'Too weak');
          } else if (len > 4 && len <= 8) {
            $('.register .progress-bar_item-2').addClass('active');
            $('.register .progress-bar_item-3').removeClass('active');
            $('.register .active').css('background-color', '#F9AE35');
            changeText(pbText, 'Could be stronger');
          } else {
            $('.register .progress-bar_item').each(function() {
              $(this).addClass('active');
            });
            $('.register .active').css('background-color', '#2DAF7D');
            changeText(pbText, 'Strong password');
          } 
        });
      });
  </script>

  <script>
     var val;

    function sendOTP()
    {
      if(document.getElementById("zip_code").value.length!=10)
      {
        document.getElementById('OTP').disabled = true; 
      }
      if(document.getElementById("zip_code").value.length==10)
      {
        document.getElementById('OTP').disabled = false;

        document.getElementById("OTP_field").style.display = "block";
        document.getElementById("OTP").style.display = "none";
        val=Math.floor(1000+Math. random()*900000); 


        $(document).ready(function(){

        var otp=val;
        var MobileNo=document.getElementById("zip_code").value;

        $.post("SendOTP.php",{k1:MobileNo,k2:otp},function(data){
          alert("One Time Password(OTP) is been send on your mobile number. Check your inbox.");
        }); 

      });

        var otpMessage=("One Time Password(OTP) for registration in Fine Alert System is "+val+".");
                                        
        localStorage.setItem('OTP message', otpMessage);

        console.log(val); 
      }
    }


    function verify()
    {
      var UserName=document.getElementById("UserName").value;
      var UserID=document.getElementById("UserID").value;
      var Branch=document.getElementById("Branch").value;
      var Semester=document.getElementById("Semester").value;
      var Section=document.getElementById("Section").value;
      var MobileNo=document.getElementById("zip_code").value;
      var entered_OTP=document.getElementById("OTPno").value;

      if((UserName!=null || UserName!="") && (UserID!=null || UserID!="") && (Branch!=null || Branch!="") && (Semester!=null || Semester!="") && (Section!=null || Section!="") && (MobileNo!=null || MobileNo!="")) {
        if(entered_OTP==val)
        {
          console.log("same");

          document.getElementById("verified").value="Verified";
          document.getElementById('verified').className = "btn btn-success";
          document.getElementById("verified").disabled = true;
          document.getElementById("register").disabled = false;
        }
      }
      else
      {
        alert('Enter All The Details.');
      }
    }

    function check() {
   if(document.getElementById("zip_code").value==="") { 
            document.getElementById('OTP').disabled = true; 
        } else { 
          if(document.getElementById("zip_code").value.length==10)
          {
            document.getElementById('OTP').disabled = false; 
          }
        }
    }
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
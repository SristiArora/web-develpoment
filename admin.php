<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dues Notification System - Admin</title>
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
    
    
    @media (max-width: 392px) {
      .nav-link {
        font-size: 11.5px;
      }

      .impose.save.show{
        font-size: 15px;
      }
      .save{
        font-size: 15px;
      }
      .show{
        font-size: 15px;
      }
      .reset{
        font-size: 15px;
      }
      .issue{
        font-size: 15px;
      }

      table {
        font-size: 10px;
      }

      .Edit {
        font-size: 10px;
      }

      .Print {
        font-size: 10px;
      }

      .show {
        font-size: 10px;
      }

      .save {
        font-size: 10px;
      }
    }

    @media (min-width: 769px) {
      
    }

    @media (min-width: 1200px) {
      
    }

    .nav-link {
      color: black;
      background-color: white;
    }

     .fine-tab.active {
        background-color: black;
     }

    .Card {
      width: 90%;
      text-align: center;
      color: black;
    }

    .form-control {
      border-color: grey;
    }

    table tbody { display:block; max-height:450px; overflow-y:scroll; }
    table thead, table tbody tr { display:table; width:100%; table-layout:fixed; }

    tbody {
      height: 150px;
    }

    nav.mobile-nav.d-lg-none {
        height: 105px;
    }


    // Responsive Bootstrap Tabs without JS
.tabbable-responsive {
  display: block;
  min-width: 100%;
  overflow-x: auto;
  
  // Some tweaks for card-header
  margin: 0px -20px -13px -20px;
}

.tabbable {
    min-width: 100%;
    
    .nav-tabs {
      white-space: nowrap;
      display: inline-block;
      min-width: 100%;
      
      // Some tweaks for card-header
      padding: 0px 21px;
      
      .nav-item {
        display: inline-block;
        
        .nav-link {
          display: inline-block;
        }
      }
    }
}
// ----- END

// Some stylesheet for Elmah.io
small {
  font-size: 12px;
}
.card {
  box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.15);
}
a {
  color: #0da58e;
  
  &:hover {
    color: #075e51;
  }
}
.text-dark {
  text-decoration: none !important;
}
.elmahio-ad {
  background: #fff;
  box-shadow: 0px 0px 0px 1px #ddd;
  border-radius: 4px;
  overflow: hidden;
  
  .logo {
    background: #0da58e;
    width: 60px;
    height: 60px;
    text-align: center;
    line-height: 52px;
    img {
      width: 50px;
    }
  }
  .motto {
    width: 180px;
    font-size: 12px;
    font-weight: bolder;
    padding: 12px;
  }
}

.fine_class {
  background-color: lightgrey;
}

.detail_class {
  background-color: lightgrey;
}

*, *::before, *::after {
  box-sizing: border-box;
}

.combo {
  display: block;
  margin-bottom: 1.5em;
  max-width: 400px;
  position: relative;
}

.combo::after {
  border-bottom: 2px solid rgba(0,0,0,.5);
  border-right: 2px solid rgba(0,0,0,.5);
  content: '';
  display: block;
  height: 12px;
  pointer-events: none;
  position: absolute;
  right: 16px;
  top: 50%;
  transform: translate(0, -65%) rotate(45deg);
  width: 12px;
}

.input-wrapper {
  border-radius: 4px;
}

.combo-input {
  background-color: #f5f5f5;
  /*border: 2px solid rgba(0,0,0,.5);*/
  border-radius: 4px;
  display: block;
  font-size: 1em;
  /*min-height: calc(1.4em + 26px);*/
  padding: 12px 16px 14px;
  text-align: left;
  width: 100%;
}

select.combo-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.open .combo-input {
  border-radius: 4px 4px 0 0;
}

.combo-input:focus {
  border-color: #0067b8;
  box-shadow: 0 0 4px 2px #0067b8;
  outline: 5px solid transparent;
}

.combo-label {
  display: block;
  font-size: 20px;
  font-weight: 100;
  margin-bottom: 0.25em;
}

.combo-menu {
  background-color: #f5f5f5;
  border: 1px solid rgba(0,0,0,.42);
  border-radius: 0 0 4px 4px;
  display: none;
  max-height: 300px;
  overflow-y:scroll;
  left: 0;
  position: absolute;
  top: 100%;
  width: 100%;
  z-index: 100;
}

.open .combo-menu {
  display: block;
}

.combo-option {
  padding: 10px 12px 12px;
}

.combo-option.option-current,
.combo-option:hover {
  background-color: rgba(0,0,0,0.1);
}

.combo-option.option-selected {
  padding-right: 30px;
  position: relative;
}

.combo-option.option-selected::after {
  border-bottom: 2px solid #000;
  border-right: 2px solid #000;
  content: '';
  height: 16px;
  position: absolute;
  right: 15px;
  top: 50%;
  transform: translate(0, -50%) rotate(45deg);
  width: 8px;
}

/* multiselect list of selected options */
.selected-options {
  list-style-type: none;
  margin: 0;
  max-width: 400px;
  padding: 0;
}

.selected-options li {
  display: inline-block;
  margin-bottom: 5px;
}

.remove-option {
  background-color: #6200ee;
  border: 1px solid #6200ee;
  border-radius: 3px;
  color: #fff;
  font-size: 0.75em;
  font-weight: bold;
  margin-bottom: 6px;
  margin-right: 6px;
  padding: 0.25em 1.75em 0.25em 0.25em;
  position: relative;
}

.remove-option:focus {
  border-color: #baa1dd;
  box-shadow: 0 0 3px 1px #6200ee;
  outline: 3px solid transparent;
}

.remove-option::before,
.remove-option::after {
  border-right: 2px solid #fff;
  content: "";
  height: 1em;
  right: 0.75em;
  position: absolute;
  top: 50%;
  width: 0;
}

.remove-option::before {
  transform: translate(0, -50%) rotate(45deg);
}

.remove-option::after {
  transform: translate(0, -50%) rotate(-45deg);
}


.multiselect-inline {
  align-items: center;
  background-color: #f5f5f5;
  border: 2px solid rgba(0,0,0,.42);
  border-radius: 4px;
  display: flex;
  flex-wrap: wrap;
  min-height: calc(1.4em + 26px);
  padding: 12px 16px 14px;
}

.multiselect-inline .selected-options {
  flex: 0 1 auto;
}

.multiselect-inline .selected-options li {
  margin-bottom: 0;
}

.multiselect-inline .combo-input {
  border: none;
  flex: 1 1 35%;
  min-height: calc(1.4em - 2px);
  padding: 0;
}

.multiselect-inline .combo-input:focus {
  box-shadow: none;
  outline: none;
}

.multiselect-inline:focus-within {
  box-shadow: 0 0 3px 2px #0067b8;
  outline: 5px solid transparent;
}


  </style>
  <script type="text/javascript">
    function fine()
    {
      //window.open("fine_increaser.php");
       window.open("fine_increaser.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=2000,left=1400,width=1,height=1");
      // $.post("fine_increaser.php",{},function(data){
      //   alert("done");
      // }
    }
  </script>
</head>

<body onload="fine()">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a>Dues Notification System<span>.</span></a></h1>
          
          <nav class="nav-menu d-none d-lg-block">
            <script>
            </script>
            <ul>
              <li><a data-toggle="modal" id="issueCheck" onclick="unIssue()" href="#myModal">Un-Issue Card</a></li>
              <li><a href="logout.php">Logout</a></li>
              <script>
                function unIssue()
                {
                  $(document).ready(function(){

                    $("#issueCheck").click(function(){

                      $.post("UnIssueDetails.php",{},function(data){
                        $("#UnIssue").html(data);
                      }); 

                    }) ;
                  })
                }
              </script>
            </ul>
          </nav>

        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style=""><!-- overflow: scroll; -->

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-top: 55px; background-color: lightgrey;">
        <div class="modal-header">
          <h4 class="modal-title"><u>Un-Issue</u> <u>Card</u></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <table  id="UnIssue" class="table table-bordered" style="font-size: 12px"></table>
          <form>
            <input type="password" class="form-control" placeholder="Enter Your Password Here" id="pw" name="pw" style="margin-bottom: 10px">
            <input type="submit" class="btn btn-success" value="UnIssue Cards" name="">

            <?php
              if(isset($_REQUEST['pw']))
              {
                $con=mysqli_connect('localhost','root','','Minor-Project(Fine Alert System)');
                $q="select * from fine where Semester='8' and Status='Paid'";
                $rs=mysqli_query($con,$q);

                while($row=mysqli_fetch_array($rs))
                {
                  $q1="delete from student where CardNo=$row[CardNo]";
                  $rs1=mysqli_query($con,$q1);
                  if($rs1)
                  {
                    echo "done1";
                  }

                  $q2="update card set Card_Status='Not issued' where CardNo=$row[CardNo]";
                  $rs2=mysqli_query($con,$q2);
                  if($rs2)
                  {
                    echo "done2";
                  }

                  $q3="delete from fine where CardNo=$row[CardNo] and Status='Paid'";
                  $rs3=mysqli_query($con,$q3);
                  while($rs3)
                  {
                    echo "done3";
                  }

                }

               }
            ?>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row"><!-- 
            <div class="col-xl-3"></div> -->
            <div class="col-xl-6" id="main" style=" margin-top: 135px">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link fine-tab active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" onclick="hide1()">Card Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link fine-tab" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="hide2()">Create Card</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link fine-tab" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" onclick="hide3()">Impose Fine</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent" style="background-color: white; padding: 10px;background-color: white; width: 63%">
                    <div id="xxx"><!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                         <form>
                            <div style="margin-bottom: 10px">
                              <input type="text" class="form-control" placeholder="Card Number" id="Card_No" name="Card_No">
                            </div>
                            <div style="margin-bottom: 10px">
                              <input type="button" id="show" class="btn btn-success show" value="Show" onclick="individualDetails()">
                                        
                                       
                              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                              <script>
                                function individualDetails()
                                {
                                  var check=0;
                                  localStorage.setItem("Check", check);

                                  $(document).ready(function(){

                                     $("#show").click(function(){

                                          var r=$("#Card_No").val();
                                          $.post("Student_details_AdminSide.php",{k:r},function(data){
                                              $("#details").html(data);
                                          }); 

                                      }) ;
                                  })
                                }
                             </script>
                           </div>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane" id="tabs-2" role="tabpanel">
                        
                      </div>
                    </div>
                  </div>

                    <!-- Card Options -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                          <div class="tab-content" id="v-pills-tabContent" style="width: 100%;float: left;">
                            <!-- Create Card -->
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"> 
                               <form>
                                  <div style="margin-bottom: 10px">
                                    <input type="number" class="form-control" placeholder="Number Of Cards" name="createCardNo">
                                  </div>
                                  <div style="margin-bottom: 10px">
                                    <input type="submit" class="btn btn-success save" value="Save" name="create_card_submit">
                                  </div>
                                  <?php
                                    if(isset($_REQUEST['createCardNo']))
                                    {
                                      $noOfCards=$_REQUEST['createCardNo'];
                                      $noOfCards1=intval($noOfCards);
                                      $i=1;
                                      while($i<=$noOfCards1)
                                      {
                                        $CardNo=rand(1111111111,9999999999);
                                        
                                        

                                        $con=mysqli_connect('localhost','root','','Minor-Project(Fine Alert System)');

                                        $q1="insert into card values('$CardNo','Not issued')";
                                        $rs1=mysqli_query($con,$q1);
                                        $i++;
                                      }
                                    }
                                  ?>
                                </form>
                            </div>
                          </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                      <div class="tabbable-responsive" id="fine_tab">
                        <div class="tabbable">
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link fine_class active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">Fine For Individual</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link fine_class" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Fine For Section</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      
                      <div class="tab-content" id="fine_content" style="display: none;">
                        <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                          <h5 class="card-title">Fine For Individual</h5>
                          <p class="card-text">
                            <form method="post">
                              <?php

                                $con=mysqli_connect('localhost','root','','Minor-Project(Fine Alert System)');
                                $q="select * from student";
                                $rs=mysqli_query($con,$q);

                                echo "<script>const options = [";
                                while($row=mysqli_fetch_array($rs))
                                {
                                  echo "'$row[CardNo]',";
                                }
                                echo "]</script>";

                              ?>
                              <div style="margin-bottom: 10px">
                                <input type="text" class="form-control" placeholder="Card Number" name="CardNo">
                              </div>
                              <div style="margin-bottom: 10px">
                                <select class="form-control" name="fine_type">
                                  <option>Fine Type</option>
                                  <option>Late Fee</option>
                                  <option>Library Fine</option>
                                  <option>Lab Fine</option>
                                </select>
                              </div>
                              <div style="margin-bottom: 10px">
                                <input type="text" class="form-control" placeholder="Amount" name="Amount">
                              </div>
                              <div style="margin-bottom: 10px">
                                <input type="date" class="form-control" placeholder="Last date" name="Last_Date">
                              </div>
                              <div style="margin-bottom: 10px">
                                <input type="submit" class="btn btn-success impose" value="Impose" name="individual_fine_submit">
                              </div>
                              <?php
                                if(isset($_POST['CardNo']) && isset($_POST['fine_type']) && isset($_POST['Amount']) && isset($_POST['Last_Date']))
                                {
                                  $Card=$_POST['CardNo'];
                                  $fine_type=$_POST['fine_type'];
                                  $Amount=$_POST['Amount'];
                                  $Last_Date=$_POST['Last_Date'];
                                  

                                  $con=mysqli_connect('localhost','root','','Minor-Project(Fine Alert System)');

                                    $q1="select * from student where CardNo=$Card";
                                    $rs1=mysqli_query($con,$q1);

                                    if($row=mysqli_fetch_array($rs1))
                                    {
                                      $Branch=$row['Branch'];
                                      $Semester=$row['Semester'];
                                      $Section=$row['Section'];
                                      $q="insert into fine values(NULL,'$Branch','$Semester','$Section','$Card','$fine_type','$Amount','$Amount','$Last_Date','Un-Paid','-')";
                                      $rs=mysqli_query($con,$q);

                                      if($rs)
                                      { 
                                        $q1="select * from student where CardNo='$Card'";
                                        $rs1=mysqli_query($con,$q1);

                                        if($row1=mysqli_fetch_array($rs1))
                                        {
                                          $mobleNo=$row1['MobileNo'];
                                          $name=$row1['User_Name'];
                                        }

                                        $fields = array(
                                            "sender_id" => "FSTSMS",
                                            "message" => "Dear $name, you have been imposed with the fine of fine type \"$fine_type\" of amount \"Rs.$Amount\" and the last date of paying it is \"$Last_Date\".",
                                            "language" => "english",
                                            "route" => "p",
                                            "numbers" => "$mobleNo", anydesk
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
                                        $message=("You have been imposed with the fine of fine type \"$fine_type\" of amount \"Rs.$Amount\" and the last date of paying it is \"$Last_Date\".");
                                                            
                                        echo "<script>alert('Fine Imposed')</script>";
                                      }
                                    }
                                  
                                }
                              ?>
                            </form>
                          </p>
                        </div>
                        <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                          <h5 class="card-title">Fine For Section</h5>
                          <p class="card-text">
                            <form method="post">
                              <div style="margin-bottom: 10px">
                                <select class="form-control" name="Branch">
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
                                <select class="form-control" name="Semester">
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
                                <input type="text" class="form-control" placeholder="Section" name="Section">
                              </div>
                              <div style="margin-bottom: 10px">
                                <select class="form-control" name="fine_type">
                                   <option>Fine Type</option>
                                   <option>Late Fee</option>
                                   <option>Library Fine</option>
                                   <option>Lab Fine</option>
                                </select>
                              </div>
                              <div style="margin-bottom: 10px">
                                <input type="text" class="form-control" placeholder="Amount" name="Amount">
                              </div>
                              <div style="margin-bottom: 10px">
                                <input type="date" class="form-control" placeholder="Last date" name="Last_Date">
                              </div>
                              <div style="margin-bottom: 10px">
                                <input type="submit" class="btn btn-success impose" value="Impose" name="section_fine_submit">
                              </div>
                              <?php
                                 if(isset($_POST['Branch']) && isset($_POST['Semester']) && isset($_POST['Section']) && isset($_POST['fine_type']) && isset($_POST['Amount']) && isset($_POST['Last_Date']))
                                 {
                                   $Branch=$_POST['Branch'];
                                   $Semester=$_POST['Semester'];
                                   $Section=$_POST['Section'];
                                   $fine_type=$_POST['fine_type'];
                                   $Amount=$_POST['Amount'];
                                   $Last_Date=$_POST['Last_Date'];
                                   $done=0;

                                   $con=mysqli_connect('localhost','root','','Minor-Project(Fine Alert System)');

                                   echo $q1="select * from student where Branch='$Branch' and Semester='$Semester' and Section='$Section'";
                                   $rs1=mysqli_query($con,$q1);

                                   while($row=mysqli_fetch_array($rs1))
                                   {  
                                      $CardNo=$row['CardNo'];

                                      $q2="select * from student where CardNo='$CardNo'";
                                        $rs2=mysqli_query($con,$q1);

                                        if($row1=mysqli_fetch_array($rs1))
                                        {
                                          $mobleNo=$row1['MobileNo'];
                                        }
                                        $fields = array(
                                            "sender_id" => "FSTSMS",
                                            "message" => "You have been imposed with the fine of fine type $fine_type of amount Rs.$Amount and the last date of paying it is $Last_Date.",
                                            "language" => "english",
                                            "route" => "p",
                                            "numbers" => "$mobleNo",
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

                                      $q="insert into fine values(NULL,'$Branch','$Semester','$Section','$CardNo','$fine_type','$Amount','$Amount','$Last_Date','Un-Paid','-')";
                                      $rs=mysqli_query($con,$q);

                                      if($rs)
                                      {
                                        $done++;
                                        
                                        $message=("You have been imposed with the fine of fine type $fine_type of amount Rs.$Amount and the last date of paying it is $Last_Date.");
                                     }

                                     else
                                     {
                                      echo "script>alert('something is wrong')</script>";
                                     }
                                   }
                                   if($done>0);
                                   {
                                      echo "<script>alert('Fine Imposed')</script>";
                                   }
                                 }
                              ?>
                            </form>
                          </p>
                        </div>
                      </div>
                        
                    </div>
                  </div>
            </div>

            <div class="col-xl-6" id="details" style="margin-top: 55px;">
              <div>
            <table class='table table-bordered table-dark' id='xx'>
              <thead>
                <tr class='bg-info'>
                  <th colspan='2'>Card Number</th>
                  <th colspan='2'>
                    <input class='form-control' id='CardNo' type='text' disabled='' value='' name='CardNo'>
                  </th>
                </tr>
                <tr class='bg-info'>
                  <th colspan='2'>Name</th>
                  <th colspan='2'><input class='form-control' id='UserName' type='text' disabled='' value='' name='UserName'></th>
                </tr>
                <tr class='bg-info'>
                  <th colspan='2'>User ID</th>
                  <th colspan='2'><input class='form-control' id='UserID' type='text' disabled='' value='' name='User_ID'></th>
                </tr>
                <tr class='bg-info'>
                  <th colspan='2'>Branch</th>
                  <th colspan='2'>
                      <input class='form-control' id='Branch' type='text' disabled='' value='' name='Branch'>
                    </th>
                </tr>
                <tr class='bg-info'>
                  <th colspan='2'>Semester</th>
                  <th colspan='2'>
                      <input class='form-control' id='Semester' type='text' disabled='' value='' name='Semester'>
                    </th>
                </tr>
                <tr class='bg-info'>
                  <th colspan='2'>Section</th>
                  <th colspan='2'>
                      <input class='form-control' id='Section' type='text' disabled='' value='' name='Section'>
                    </th>
                </tr>
                <tr class='bg-success'>
                  <th colspan='1'>Fine Type</th>
                  <th colspan='1'>Amount</th>
                  <th colspan='1'>Last date</th>
                  <th colspan='1'>Status</th>
                </tr>
              </thead>
              <tbody></tbody>
              <tfoot class='bg-info'>
            <tr>
              <td>
                <form>
                    <input type='button' class='btn btn-warning Print' value='Print' onclick='printDiv()'>
                    <input type='button' onclick='enable()' id='edit' class='btn btn-danger Edit' value='Edit'>
                    <input type='submit' onclick='' id='save' class='btn btn-light Edit' value='Save' style='display: none; float: right'> 

                </form>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <script>
    function show() {
      var x = document.getElementById("xx");
      var y = document.getElementById("main");
      
        x.style.display = "block";
        document.getElementById("main").style.marginTop = "120px";
      }

      function hide1() {
      var x = document.getElementById("xxx");
      var y=document.getElementById("fine_tab");
      var y1=document.getElementById("v-pills-tabContent");
      var z=document.getElementById("fine_content");

      x.style.display="block";
      y.style.display="none";
      y1.style.display="none";
      z.style.display="none";
      
        // x.style.display = "none";
        document.getElementById("pills-tabContent").style.height = "150px";
        document.getElementById("main").style.marginTop = "120px";
      } 

      function hide2() {
      var x = document.getElementById("xxx");
      var y=document.getElementById("fine_tab");
      var y1=document.getElementById("v-pills-tabContent");
      var z=document.getElementById("fine_content");

      x.style.display="none";
      y.style.display="none";
      y1.style.display="block";
      z.style.display="none";
      
        // x.style.display = "none";
        document.getElementById("pills-tabContent").style.height = "105px";
        document.getElementById("main").style.marginTop = "120px";
      } 

      function hide3() {
      var x = document.getElementById("xxx");
      var y=document.getElementById("fine_tab");
      var z=document.getElementById("fine_content");

      x.style.display="none";
      y.style.display="block";
      z.style.display="block";
      
        // x.style.display = "none";
        document.getElementById("pills-tabContent").style.height = "445px";
        document.getElementById("main").style.marginTop = "120px";

      } 
  </script>


<script>

  function autoRefreshPage()
    {
        if(localStorage.getItem("Check")==1)
        {
          var check=0;
          localStorage.setItem("Check",check);
          window.location = window.location.href;
        }
        
    }
    setInterval('autoRefreshPage()', 0);
        

</script>

<script>
  // options for all examples
// const options = ['Apple', 'Apricot', 'Banana', 'Blackberry', 'Blueberry', 'Cantaloupe', 'Cherry', 'Date', 'Durian', 'Eggplant', 'Fig', 'Grape', 'Guava', 'Huckleberry'];

/*
 * Helper constants and functions
 */

// make it easier for ourselves by putting some values in objects
// in TypeScript, these would be enums



// make it easier for ourselves by putting some values in objects
// in TypeScript, these would be enums
const Keys = {
  Backspace: 'Backspace',
  Clear: 'Clear',
  Down: 'ArrowDown',
  End: 'End',
  Enter: 'Enter',
  Escape: 'Escape',
  Home: 'Home',
  Left: 'ArrowLeft',
  PageDown: 'PageDown',
  PageUp: 'PageUp',
  Right: 'ArrowRight',
  Space: ' ',
  Tab: 'Tab',
  Up: 'ArrowUp'
}

const MenuActions = {
  Close: 0,
  CloseSelect: 1,
  First: 2,
  Last: 3,
  Next: 4,
  Open: 5,
  Previous: 6,
  Select: 7,
  Space: 8,
  Type: 9
}

// filter an array of options against an input string
// returns an array of options that begin with the filter string, case-independent
function filterOptions(options = [], filter, exclude = []) {
  return options.filter((option) => {
    const matches = option.toLowerCase().indexOf(filter.toLowerCase()) === 0;
    return matches && exclude.indexOf(option) < 0;
  });
}

// return an array of exact option name matches from a comma-separated string
function findMatches(options, search) {
  const names = search.split(',');
  return names.map((name) => {
    const match = options.filter((option) => name.trim().toLowerCase() === option.toLowerCase());
    return match.length > 0 ? match[0] : null;
  })
  .filter((option) => option !== null);
}

// return combobox action from key press
function getActionFromKey(key, menuOpen) {
  // handle opening when closed
  if (!menuOpen && key === Keys.Down) {
    return MenuActions.Open;
  }

  // handle keys when open
  if (key === Keys.Down) {
    return MenuActions.Next;
  }
  else if (key === Keys.Up) {
    return MenuActions.Previous;
  }
  else if (key === Keys.Home) {
    return MenuActions.First;
  }
  else if (key === Keys.End) {
    return MenuActions.Last;
  }
  else if (key === Keys.Escape) {
    return MenuActions.Close;
  }
  else if (key === Keys.Enter) {
    return MenuActions.CloseSelect;
  }
  else if (key === Keys.Backspace || key === Keys.Clear || key.length === 1) {
    return MenuActions.Type;
  }
}

// get index of option that matches a string
function getIndexByLetter(options, filter) {
  const firstMatch = filterOptions(options, filter)[0];
  return firstMatch ? options.indexOf(firstMatch) : -1;
}

// get updated option index
function getUpdatedIndex(current, max, action) {
  switch(action) {
    case MenuActions.First:
      return 0;
    case MenuActions.Last:
      return max;
    case MenuActions.Previous:
      return Math.max(0, current - 1);
    case MenuActions.Next:
      return Math.min(max, current + 1);
    default:
      return current;
  }
}

// check if an element is currently scrollable
function isScrollable(element) {
  return element && element.clientHeight < element.scrollHeight;
}

// ensure given child element is within the parent's visible scroll area
function maintainScrollVisibility(activeElement, scrollParent) {
  const { offsetHeight, offsetTop } = activeElement;
  const { offsetHeight: parentOffsetHeight, scrollTop } = scrollParent;

  const isAbove = offsetTop < scrollTop;
  const isBelow = (offsetTop + offsetHeight) > (scrollTop + parentOffsetHeight);

  if (isAbove) {
    scrollParent.scrollTo(0, offsetTop);
  }
  else if (isBelow) {
    scrollParent.scrollTo(0, offsetTop - parentOffsetHeight + offsetHeight);
  }
}

/*
 * Multiselect CSV code
 */
 const MultiselectCSV = function(el, options) {
  // element refs
  this.el = el;
  this.comboEl = el.querySelector('[role=combobox]');
  this.inputEl = el.querySelector('input');
  this.listboxEl = el.querySelector('[role=listbox]');

  // data
  this.idBase = this.inputEl.id;
  this.options = options;
  this.filteredOptions = options;
  this.selectedOptions = [];

  // state
  this.activeIndex = 0;
  this.open = false;
}

MultiselectCSV.prototype.init = function() {

  this.inputEl.addEventListener('input', this.onInput.bind(this));
  this.inputEl.addEventListener('blur', this.onInputBlur.bind(this));
  this.inputEl.addEventListener('click', () => this.updateMenuState(true));
  this.inputEl.addEventListener('keydown', this.onInputKeyDown.bind(this));

  this.options.map((option, index) => {
    const optionEl = document.createElement('div');
    optionEl.setAttribute('role', 'option');
    optionEl.id = `${this.idBase}-${index}`;
    optionEl.className = index === 0 ? 'combo-option option-current' : 'combo-option';
    optionEl.setAttribute('aria-selected', 'false');
    optionEl.innerText = option;

    optionEl.addEventListener('click', () => { this.onOptionClick(index); });
    optionEl.addEventListener('mousedown', this.onOptionMouseDown.bind(this));

    this.listboxEl.appendChild(optionEl);
  });
}

MultiselectCSV.prototype.filterOptions = function(value, excludeOptions = []) {
  this.filteredOptions = filterOptions(this.options, value, excludeOptions);

  // hide/show options based on filtering
  const options = this.el.querySelectorAll('[role=option]');
  [...options].forEach((optionEl) => {
    const value = optionEl.innerText;
    if (this.filteredOptions.indexOf(value) > -1) {
      optionEl.style.display = 'block';
    }
    else {
      optionEl.style.display = 'none';
    }
  });
}

MultiselectCSV.prototype.onInput = function() {
  const curValue = this.inputEl.value;
  const currentSearch = curValue.split(',').pop().replace(/^\s+/, '');
  const matchingOptions = findMatches(this.options, curValue);
  this.updateSelectedOptions(matchingOptions, false);
  this.filterOptions(currentSearch, this.selectedOptions);

  // if active option is not in filtered options, set it to first filtered option
  if (this.filteredOptions.indexOf(this.options[this.activeIndex]) < 0) {
    const firstFilteredIndex = Math.max(this.options.indexOf(this.filteredOptions[0]), 0);
    this.onOptionChange(firstFilteredIndex);
  }

  const menuState = this.filteredOptions.length > 0;
  if (this.open !== menuState) {
    this.updateMenuState(menuState, false);
  }
}

MultiselectCSV.prototype.onInputKeyDown = function(event) {
  const { key } = event;

  const max = this.filteredOptions.length - 1;
  const activeFilteredIndex = this.filteredOptions.indexOf(this.options[this.activeIndex]);

  const action = getActionFromKey(key, this.open);

  switch(action) {
    case MenuActions.Next:
    case MenuActions.Last:
    case MenuActions.First:
    case MenuActions.Previous:
      event.preventDefault();
      const nextFilteredIndex = getUpdatedIndex(activeFilteredIndex, max, action);
      const nextRealIndex = this.options.indexOf(this.filteredOptions[nextFilteredIndex]);
      return this.onOptionChange(nextRealIndex);
    case MenuActions.CloseSelect:
      event.preventDefault();
      this.updateOption(this.activeIndex);
      return this.updateMenuState(false);
    case MenuActions.Close:
      event.preventDefault();
      return this.updateMenuState(false);
    case MenuActions.Open:
      return this.updateMenuState(true);
  }
}

MultiselectCSV.prototype.onInputBlur = function() {
  if (this.ignoreBlur) {
    this.ignoreBlur = false;
    return;
  }

  if (this.open) {
    this.processInputString(this.inputEl.value);
    this.updateMenuState(false, false);
  }
}

MultiselectCSV.prototype.onOptionChange = function(index) {
  this.activeIndex = index;
  this.inputEl.setAttribute('aria-activedescendant', `${this.idBase}-${index}`);

  // update active style
  const options = this.el.querySelectorAll('[role=option]');
  [...options].forEach((optionEl) => {
    optionEl.classList.remove('option-current');
  });
  options[index].classList.add('option-current');

  if (this.open && isScrollable(this.listboxEl)) {
    maintainScrollVisibility(options[index], this.listboxEl);
  }
}

MultiselectCSV.prototype.onOptionClick = function(index) {
  this.onOptionChange(index);
  this.updateOption(index);
  this.inputEl.focus();
}

MultiselectCSV.prototype.onOptionMouseDown = function() {
  this.ignoreBlur = true;
}

MultiselectCSV.prototype.processInputString = function(inputString) {
  const options = findMatches(this.options, inputString);
  this.updateSelectedOptions(options, true);
}

MultiselectCSV.prototype.updateOption = function(index) {
  const option = this.options[index];
  const selectedIndex = this.selectedOptions.indexOf(option);
  const isSelected = selectedIndex > -1;
  this.filterOptions('');

  if (isSelected) {
    this.selectedOptions.splice(selectedIndex, 1);
    this.updateSelectedOptions(this.selectedOptions, true);
  }

  else {
    this.updateSelectedOptions([...this.selectedOptions, option], true);
  }
}

MultiselectCSV.prototype.updateMenuState = function(open, callFocus = true) {
  this.open = open;

  this.comboEl.setAttribute('aria-expanded', `${open}`);
  open ? this.el.classList.add('open') : this.el.classList.remove('open');
  callFocus && this.inputEl.focus();
}

MultiselectCSV.prototype.updateSelectedOptions = function(options, setInputValue) {
  this.selectedOptions = options;

  if (setInputValue) {
    this.inputEl.value = this.selectedOptions.join(', ');
  }

  // update aria-selected
  const optionEls = this.el.querySelectorAll('[role=option]');
  [...optionEls].forEach((optionEl) => {
    const optionSelected = this.selectedOptions.indexOf(optionEl.innerText) > -1;
    optionEl.setAttribute('aria-selected', `${optionSelected}`);
    optionSelected ? optionEl.classList.add('option-selected') : optionEl.classList.remove('option-selected');
  });

  this.filterOptions('');
}

// init combo
const csvEl = document.querySelector('.js-csv');
const csvComponent = new MultiselectCSV(csvEl, options);
csvComponent.init();

/*
 * Multiselect Combobox w/ Buttons code
 */
 const MultiselectButtons = function(el, options) {
  // element refs
  this.el = el;
  this.comboEl = el.querySelector('[role=combobox]');
  this.inputEl = el.querySelector('input');
  this.listboxEl = el.querySelector('[role=listbox]');

  this.idBase = this.inputEl.id;
  this.selectedEl = document.getElementById(`${this.idBase}-selected`);

  // data
  this.options = options;
  this.filteredOptions = options;

  // state
  this.activeIndex = 0;
  this.open = false;
}

MultiselectButtons.prototype.init = function() {

  this.inputEl.addEventListener('input', this.onInput.bind(this));
  this.inputEl.addEventListener('blur', this.onInputBlur.bind(this));
  this.inputEl.addEventListener('click', () => this.updateMenuState(true));
  this.inputEl.addEventListener('keydown', this.onInputKeyDown.bind(this));

  this.options.map((option, index) => {
    const optionEl = document.createElement('div');
    optionEl.setAttribute('role', 'option');
    optionEl.id = `${this.idBase}-${index}`;
    optionEl.className = index === 0 ? 'combo-option option-current' : 'combo-option';
    optionEl.setAttribute('aria-selected', 'false');
    optionEl.innerText = option;

    optionEl.addEventListener('click', () => { this.onOptionClick(index); });
    optionEl.addEventListener('mousedown', this.onOptionMouseDown.bind(this));

    this.listboxEl.appendChild(optionEl);
  });
}

MultiselectButtons.prototype.filterOptions = function(value) {
  this.filteredOptions = filterOptions(this.options, value);

  // hide/show options based on filtering
  const options = this.el.querySelectorAll('[role=option]');
  [...options].forEach((optionEl) => {
    const value = optionEl.innerText;
    if (this.filteredOptions.indexOf(value) > -1) {
      optionEl.style.display = 'block';
    }
    else {
      optionEl.style.display = 'none';
    }
  });
}

MultiselectButtons.prototype.onInput = function() {
  const curValue = this.inputEl.value;
  this.filterOptions(curValue);

  // if active option is not in filtered options, set it to first filtered option
  if (this.filteredOptions.indexOf(this.options[this.activeIndex]) < 0) {
    const firstFilteredIndex = this.options.indexOf(this.filteredOptions[0]);
    this.onOptionChange(firstFilteredIndex);
  }

  const menuState = this.filteredOptions.length > 0;
  if (this.open !== menuState) {
    this.updateMenuState(menuState, false);
  }
}

MultiselectButtons.prototype.onInputKeyDown = function(event) {
  const { key } = event;

  const max = this.filteredOptions.length - 1;
  const activeFilteredIndex = this.filteredOptions.indexOf(this.options[this.activeIndex]);

  const action = getActionFromKey(key, this.open);

  switch(action) {
    case MenuActions.Next:
    case MenuActions.Last:
    case MenuActions.First:
    case MenuActions.Previous:
      event.preventDefault();
      const nextFilteredIndex = getUpdatedIndex(activeFilteredIndex, max, action);
      const nextRealIndex = this.options.indexOf(this.filteredOptions[nextFilteredIndex]);
      return this.onOptionChange(nextRealIndex);
    case MenuActions.CloseSelect:
      event.preventDefault();
      return this.updateOption(this.activeIndex);
    case MenuActions.Close:
      event.preventDefault();
      return this.updateMenuState(false);
    case MenuActions.Open:
      return this.updateMenuState(true);
  }
}

MultiselectButtons.prototype.onInputBlur = function() {
  if (this.ignoreBlur) {
    this.ignoreBlur = false;
    return;
  }

  if (this.open) {
    this.updateMenuState(false, false);
  }
}

MultiselectButtons.prototype.onOptionChange = function(index) {
  this.activeIndex = index;
  this.inputEl.setAttribute('aria-activedescendant', `${this.idBase}-${index}`);

  // update active style
  const options = this.el.querySelectorAll('[role=option]');
  [...options].forEach((optionEl) => {
    optionEl.classList.remove('option-current');
  });
  options[index].classList.add('option-current');

  if (this.open && isScrollable(this.listboxEl)) {
    maintainScrollVisibility(options[index], this.listboxEl);
  }
}

MultiselectButtons.prototype.onOptionClick = function(index) {
  this.onOptionChange(index);
  this.updateOption(index);
  this.inputEl.focus();
}

MultiselectButtons.prototype.onOptionMouseDown = function() {
  this.ignoreBlur = true;
}

MultiselectButtons.prototype.removeOption = function(index) {
  const option = this.options[index];

  // update aria-selected
  const options = this.el.querySelectorAll('[role=option]');
  options[index].setAttribute('aria-selected', 'false');
  options[index].classList.remove('option-selected');

  // remove button
  const buttonEl = document.getElementById(`${this.idBase}-remove-${index}`);
  this.selectedEl.removeChild(buttonEl.parentElement);
}

MultiselectButtons.prototype.selectOption = function(index) {
  const selected = this.options[index];
  this.activeIndex = index;

  // update aria-selected
  const options = this.el.querySelectorAll('[role=option]');
  options[index].setAttribute('aria-selected', 'true');
  options[index].classList.add('option-selected');

  // add remove option button
  const buttonEl = document.createElement('button');
  const listItem = document.createElement('li');
  buttonEl.className = 'remove-option';
  buttonEl.type = 'button';
  buttonEl.id = `${this.idBase}-remove-${index}`;
  buttonEl.setAttribute('aria-describedby', `${this.idBase}-remove`);
  buttonEl.addEventListener('click', () => { this.removeOption(index); });
  buttonEl.innerHTML = selected + ' ';

  listItem.appendChild(buttonEl);
  this.selectedEl.appendChild(listItem);
}

MultiselectButtons.prototype.updateOption = function(index) {
  const option = this.options[index];
  const optionEls = this.el.querySelectorAll('[role=option]');
  const optionEl = optionEls[index];
  const isSelected = optionEl.getAttribute('aria-selected') === 'true';

  if (isSelected) {
    this.removeOption(index);
  }

  else {
    this.selectOption(index);
  }

  this.inputEl.value = '';
  this.filterOptions('');
}

MultiselectButtons.prototype.updateMenuState = function(open, callFocus = true) {
  this.open = open;

  this.comboEl.setAttribute('aria-expanded', `${open}`);
  open ? this.el.classList.add('open') : this.el.classList.remove('open');
  callFocus && this.inputEl.focus();
}

// init multiselect w/ top buttons
const multiButtonEl = document.querySelector('.js-multi-buttons');
const multiButtonComponent = new MultiselectButtons(multiButtonEl, options);
multiButtonComponent.init();

// init multiselect w/ inline buttons
const inlineButtonEl = document.querySelector('.js-inline-buttons');
const inlineButtonComponent = new MultiselectButtons(inlineButtonEl, options);
inlineButtonComponent.init();
</script>




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
  <script src="assets/js/jquery.js"></script>

</body>

</html>
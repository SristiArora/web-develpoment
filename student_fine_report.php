<!DOCTYPE html>
<html>
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
  	body
  	{
  		background-color: background: #0F2027; 
  		background: -webkit-linear-gradient(to bottom, #2C5364, #203A43, #0F2027); 
  		background: linear-gradient(to bottom, #2C5364, #203A43, #0F2027);
  	}
  </style>

  <script>
	function show()
	{	
		document.getElementById('cardno').value = localStorage.getItem('Card Number');
		document.getElementById('fineType').value = localStorage.getItem('Fine Type');
		document.getElementById('mainAmount').value = localStorage.getItem('Main Amount');
		document.getElementById('lastDate').value = localStorage.getItem('Last Date');
		document.getElementById('status').value = localStorage.getItem('Status');

		 $(function() {
		     $('#cardno').keypress(function(event) {
		          event.preventDefault();
		         return false;
		     });

		     $('#FineType').keypress(function(event) {
		          event.preventDefault();
		         return false;
		     });
		     
		     $('#mainAmount').keypress(function(event) {
		          event.preventDefault();
		         return false;
		     });
		     
		     $('#LastDate').keypress(function(event) {
		          event.preventDefault();
		         return false;
		     });
		     
		     $('#status').keypress(function(event) {
		          event.preventDefault();
		         return false;
		     });
		});


		 setTimeout(function(){ window.close(); }, 120000);
	}
</script>

</head>
<body onload="show()">
	<form id="show" onsubmit="save()" style="padding: 10px;" name="show">
		<input type="text" class="form-control" id="cardno" placeholder="Card Number" name="cardno" style="display: none;">
		<input type="text" class="form-control" id="fineType" placeholder="Fine Type" name="fineType" style="margin-top: 5px">
		<input type="text" class="form-control" id="mainAmount" placeholder="Amount" name="mainAmount" style="margin-top: 5px">
		<input type="text" class="form-control" id="lastDate" class="lastDate" placeholder="Last Date" name="lastDate" style="margin-top: 5px">
		<input type="text" class="form-control" id="status" class="status" placeholder="Status" name="status" style="margin-top: 5px">

		<input type="submit" class="btn btn-primary" value="Pay"  style="margin-top: 10px">
		<?php

			if(isset($_REQUEST['cardno']) && isset($_REQUEST['fineType']) && isset($_REQUEST['mainAmount']) && isset($_REQUEST['lastDate']) && isset($_REQUEST['status']))
			{	
		          $CardNo=$_REQUEST['cardno'];
		          $FineType=$_REQUEST['fineType'];
		          $MainAmount=$_REQUEST['mainAmount'];
		          $LastDate=$_REQUEST['lastDate'];
		          $Status=$_REQUEST['status'];
		          $current_date=date("d-m-Y");

		          $Updated_Status="Paid";

		          $con=mysqli_connect('localhost','root','','Minor-Project(Fine Alert System)');
		          $q1="update fine set Status='$Updated_Status', On_Date='$current_date' where CardNo='$CardNo' and Fine_Type='$FineType' and Actual_Amount='$MainAmount' and Last_Date='$LastDate' and Status='Un-Paid'";
		          $rs=mysqli_query($con,$q1);

		          if($rs)
		          {
		          	$todate=date("l Y-m-d");

		          	$q2="select * from student where CardNo='$cardno'";
                    $rs2=mysqli_query($con,$q2);

                    if($row2=mysqli_fetch_array($rs2))
                    {
                    	$mobleNo=$row2['MobileNo'];
                    }

					$fields = array(
					    "sender_id" => "FSTSMS",
					    "message" => "Your fine of fine type \"$FineType\" of amount \"Rs.$MainAmount\" is paid on \"$todate.\"",
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

		            echo "<script>alert('Fine is been paid.')</script>";
		            $message=("Your fine of fine type $FineType of amount Rs.$MainAmount is paid on $todate.");
                                        
		            echo "<script>window.close()</script>";
		          }
		          else 
		          {
		          	echo "something went wrong";
		          }

		    }
		?>
	</form>

	<script>
		function save(){


			var cardno=$("#cardno").val();
		   	var fineType=$("#fineType").val();
		   	var mainAmount=$("#mainAmount").val();
		   	var lastDate=$("#LastDate").val();
		   	var status="Paid";

		   
		//    	localStorage.setItem("Card Number", cardno);
		//    	localStorage.setItem("Fine Type", fineType);
		//    	localStorage.setItem("Main Amount", mainAmount);
		//    	localStorage.setItem("Last Date", lastDate);
		   	localStorage.setItem("Status", status);

		   	
			var check=1;
			localStorage.setItem("Check",check);
		}
	   	
	</script>

	<script>
		// window.onload=function(){
	 //        var auto = setTimeout(function(){ autoRefresh(); }, 1);

	 //        function submitform(){
	 //          document.forms["show"].submit();
	 //        }

	 //        function autoRefresh(){
	 //           clearTimeout(auto);
	 //           auto = setTimeout(function(){ submitform(); autoRefresh(); }, 1);
	 //        }
	 //    }
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
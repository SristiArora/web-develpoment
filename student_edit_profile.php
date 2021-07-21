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
		document.getElementById('cardno').value = localStorage.getItem("Card Number");
		document.getElementById('username').value = localStorage.getItem("User Name");
		document.getElementById('userid').value = localStorage.getItem("User ID");
		document.getElementById('branch').value = localStorage.getItem("Branch");
		document.getElementById('semester').value = localStorage.getItem("Semester");
		document.getElementById('section').value = localStorage.getItem("Section");

		 $(function() {
		     $('#cardno').keypress(function(event) {
		          event.preventDefault();
		         return false;
		     });
		});

		 setTimeout(function(){ window.close(); }, 120000);
	}
</script>

</head>
<body onload="show()">
	<form id="show" onsubmit="save()" style="padding: 10px;">
		<input type="text" class="form-control" id="cardno" placeholder="User Name" name="cardno" style="display: none;">
		<input type="text" class="form-control" id="username" placeholder="User Name" name="username" style="margin-top: 5px">
		<input type="text" class="form-control" id="userid" placeholder="User ID" name="userid" style="margin-top: 5px">
		<select id="branch" class="form-control" name="branch" style="margin-top: 5px">
			<option disabled >Branch</option>
            <option value='Computer Science & Engineering'>Computer Science & Engineering</option>
            <option value='Electronics and Tele-Communication'>Electronics and Tele-Communication</option>
            <option value='Information Technolog'>Information Technology</option>
            <option value='Electrical and Electronics Engineering'>Electrical and Electronics Engineering</option>
            <option value='Electrical Engineering'>Electrical Engineering</option>
            <option value='Civil Engineering'>Civil Engineering</option>
            <option value='Mechanical Engineering'>Mechanical Engineer</option>
		</select>
        <select class="form-control" name="semester" id="semester" style="margin-top: 5px">
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
        <input type="text" class="form-control" placeholder="Section" name="section" id="section" style="margin-top: 5px">


		<input type="submit" class="btn btn-primary" value="Update Details"  style="margin-top: 10px">
		<?php
		
			if(isset($_REQUEST['cardno']) && isset($_REQUEST['username']) && isset($_REQUEST['userid']) && isset($_REQUEST['branch']) && isset($_REQUEST['semester']) && isset($_REQUEST['section']))
			{
		          $UserName=$_REQUEST['username'];
		          $User_ID=$_REQUEST['userid'];
		          $Branch=$_REQUEST['branch'];
		          $Semester=$_REQUEST['semester'];
		          $Section=$_REQUEST['section'];
		          $CardNo=$_REQUEST['cardno'];

		          $con=mysqli_connect('localhost','root','','Minor-Project(Fine Alert System)');
		          $q1="update student set User_ID='$User_ID', User_Name='$UserName', Branch='$Branch', Semester='$Semester', Section='$Section' where CardNo='$CardNo'";
		          $rs=mysqli_query($con,$q1);

		          if($rs)
		          {
		            echo "<script>alert('Student Info Updated')</script>";
		            echo "<script>window.close()</script>";
		            echo "var check='1';
		            		<script>localStorage.setItem('Check', check);</script>";
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
		   	var username=$("#username").val();
		   	var userid=$("#userid").val();
		   	var branch=$("#branch").val();
		   	var semester=$("#semester").val();
		   	var section=$("#section").val();

		   
		   	localStorage.setItem("Card Number", cardno);
		   	localStorage.setItem("User Name", username);
		   	localStorage.setItem("User ID", userid);
		   	localStorage.setItem("Branch", branch);
		   	localStorage.setItem("Semester", semester);
		   	localStorage.setItem("Section", section);

		   	
			var check=1;
			localStorage.setItem("Check",check);
		}
	   	
	</script>

	<script>
		function update()
		{
		}
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
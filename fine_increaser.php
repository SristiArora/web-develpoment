<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- Fine Checker -->
	<?php
		$con=mysqli_connect('localhost','root','','Minor-Project(FIne Alert System)');
		$q="select * from fine where Status='Un-Paid'";
		$rs=mysqli_query($con,$q);

		if($rs)
		{
				function dateDiffInDays($date1,$date2)
				{
				$diff=strtotime($date2)-strtotime($date1);
				return abs(round($diff/86400));
			}
			while($row=mysqli_fetch_array($rs))
			{
				$CardNo=$row['CardNo'];
				$LastDate=date('Y-m-d',strtotime($row['Last_Date']));
				$fineType=$row['Fine_Type'];
				$MainAmount=(int)$row['Main_Amount'];
				$current_date=date("Y-m-d");

				if($current_date>$LastDate)
				{

					$noOfDays=dateDiffInDays($LastDate, $current_date);
					$amount=25;
					$Actual_Amount=$MainAmount+$noOfDays*$amount;

					$q1="update fine set Actual_Amount='$Actual_Amount' where CardNo='$CardNo' and Last_Date='$LastDate' and Fine_Type='$fineType'";
					$rs1=mysqli_query($con,$q1);

					if($rs1)
					{
						// echo "<script>window.close();</script>";
					}
				}
				elseif($current_date==$LastDate)
				{
		            $message=("Today is the last date of paying the fine of type $fineType. Please pay the fine by today");
                                        
                    echo "<script>localStorage.setItem('Last Date message', '$message')</script>";
		            // echo "<script>window.close()</script>";

		            // sms code lgana hai

		            $q1="select * from student where CardNo='$CardNo'";
                    $rs1=mysqli_query($con,$q1);

                    if($row1=mysqli_fetch_array($rs1))
                    {
                    	$mobleNo=$row1['MobileNo'];
                    	$name=$row1['User_Name'];
                    }

					// $fields = array(
					//     "sender_id" => "FSTSMS",
					//     "message" => "Dear $name, today is the last date of paying the fine of type \"$fineType\". Please pay the fine by \"TODAY\".",
					//     "language" => "english",
					//     "route" => "p",
					//     "numbers" => "$mobleNo",
					//     "flash" => "1"
					// );

					// $curl = curl_init();

					// curl_setopt_array($curl, array(
					//   CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
					//   CURLOPT_RETURNTRANSFER => true,
					//   CURLOPT_ENCODING => "",
					//   CURLOPT_MAXREDIRS => 10,
					//   CURLOPT_TIMEOUT => 30,
					//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					//   CURLOPT_CUSTOMREQUEST => "POST",
					//   CURLOPT_POSTFIELDS => json_encode($fields),
					//   CURLOPT_HTTPHEADER => array(
					//     "authorization: aNtKDPGpIERhZOd6eCz0jTYwM5rBFcvq4U18Qbf97LkHsWSuxlK0Gwn3rQEoSOubRzhy47NXCDLTHiAF",
					//     "accept: /",
					//     "cache-control: no-cache",
					//     "content-type: application/json"
					//   ),
					// ));

					// $response = curl_exec($curl);
					// $err = curl_error($curl);

					// curl_close($curl);

					// if ($err) {
					//   echo "cURL Error #:" . $err;
					// } else {
					//   echo $response;
					// }

				}
				else
				{
					$Actual_Amount=$MainAmount;
					$q1="update fine set Actual_Amount='$Actual_Amount' where CardNo='$CardNo' and Last_Date='$LastDate' and Fine_Type='$fineType'";
					$rs1=mysqli_query($con,$q1);

					if($rs1)
					{
						// echo "<script>window.close();</script>";
					}
				}
			}
			echo "<script>window.close();</script>";

		}
	?>
</body>
</html>
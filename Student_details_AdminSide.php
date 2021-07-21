<?php
  
  $Card_No=$_REQUEST['k'];

  $con=mysqli_connect('localhost','root','','Minor-Project(Fine Alert System)');
  echo $q1="select * from student where CardNo='$Card_No'";
  $rs1=mysqli_query($con,$q1);

  while($row=mysqli_fetch_array($rs1))
  {
    echo "<div>
            <table class='table table-bordered table-dark' id='xx'>
              <thead>
                <tr class='bg-info'>
                  <th colspan='2'>Card Number</th>
                  <th colspan='2'>
                    <input class='form-control' id='CardNo' type='text' disabled='' value='$row[CardNo]' name='CardNo'>
                  </th>
                </tr>
                <tr class='bg-info'>
                  <th colspan='2'>Name</th>
                  <th colspan='2'><input class='form-control' id='UserName' type='text' disabled='' value='$row[User_Name]' name='UserName'></th>
                </tr>
                <tr class='bg-info'>
                  <th colspan='2'>User ID</th>
                  <th colspan='2'><input class='form-control' id='UserID' type='text' disabled='' value='$row[User_ID]' name='User_ID'></th>
                </tr>
                <tr class='bg-info'>
                  <th colspan='2'>Branch</th>
                  <th colspan='2'>
                      <input class='form-control' id='Branch' type='text' disabled='' value='$row[Branch]' name='Branch'>
                    </th>
                </tr>
                <tr class='bg-info'>
                  <th colspan='2'>Semester</th>
                  <th colspan='2'>
                      <input class='form-control' id='Semester' type='text' disabled='' value='$row[Semester]' name='Semester'>
                    </th>
                </tr>
                <tr class='bg-info'>
                  <th colspan='2'>Section</th>
                  <th colspan='2'>
                      <input class='form-control' id='Section' type='text' disabled='' value='$row[Section]' name='Section'>
                    </th>
                </tr>
                <tr class='bg-success'>
                  <th colspan='1'>Fine Type</th>
                  <th colspan='1'>Amount</th>
                  <th colspan='1'>Last date</th>
                  <th colspan='1'>Status</th>
                </tr>
              </thead>
              <tbody>";
  }

  $q2="select * from fine where CardNo='$Card_No' and Status='Un-Paid' ORDER BY id DESC";
  $rs2=mysqli_query($con,$q2); 
  while($row1=mysqli_fetch_array($rs2))
  {
    echo"<form onsumit='paid()'><tr>
          <td><input class='form-control' id='FineType$row1[id]' type='text' disabled='' value='$row1[Fine_Type]' name='Semester'></td>
          <td><input class='form-control' id='MainAmount$row1[id]' type='text' disabled='' value='$row1[Actual_Amount]' name='Semester'></td>
          <td><input class='form-control' id='LastDate$row1[id]' type='text' disabled='' value='$row1[Last_Date]' name='Semester'></td>
          <td style='text-align: center'>
            <input type='button' class='btn btn-warning' value='$row1[Status]' id='paid$row1[id]' onclick='paid($row1[id])'>
          </td>
        </tr></form>";
  }
  $q3="select * from fine where CardNo='$Card_No' and Status='Paid' ORDER BY id DESC";
  $rs3=mysqli_query($con,$q3); 
  while($row2=mysqli_fetch_array($rs3))
  {
    echo"<form onsumit='paid()'><tr>
          <td><input class='form-control' id='FineType$row2[id]' type='text' disabled='' value='$row2[Fine_Type]' name='Semester'></td>
          <td><input class='form-control' id='MainAmount$row2[id]' type='text' disabled='' value='$row2[Actual_Amount]' name='Semester'></td>
          <td><input class='form-control' id='LastDate$row2[id]' type='text' disabled='' value='$row2[Last_Date]' name='Semester'></td>
          <td style='text-align: center; font-size: 10px'>
            
            <div style='text-align: center; font-size: 13px'>Paid On<br>$row2[On_Date]</div>
          </td> 
        </tr></form>";
  }
  echo "</tbody>";
?>

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

<!-- Button trigger modal -->

<!-- Modal -->


<script> 
  function printDiv() { 
    var divContents = document.getElementById("xx").innerHTML; 
    var a = window.open('', '', 'height=500, width=500'); 
    a.document.write('<html>'); 
    a.document.write('<body > <table >'); 
    a.document.write(divContents); 
    a.document.write('</body></html>'); 
    a.document.close(); 
    a.print(); 
  } 
</script>

<script>
  function enable() 
  {
     var cardno=$("#CardNo").val();
     var username=$("#UserName").val();
     var userid=$("#UserID").val();
     var branch=$("#Branch").val();
     var semester=$("#Semester").val();
     var section=$("#Section").val();

     
     localStorage.setItem("Card Number", cardno);
     localStorage.setItem("User Name", username);
     localStorage.setItem("User ID", userid);
     localStorage.setItem("Branch", branch);
     localStorage.setItem("Semester", semester);
     localStorage.setItem("Section", section);

      window.open("student_edit_profile.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=470,height=320");
  }
</script>

<script>
  var seen1 = {};
jQuery('.Branch').children().each(function() {
    var txt = jQuery(this).attr('value');
    if (seen1[txt]) {
        jQuery(this).remove();
    } else {
        seen1[txt] = true;
    }
});

var seen2 = {};
jQuery('.Semester ').children().each(function() {
    var txt = jQuery(this).attr('value');
    if (seen2[txt]) {
        jQuery(this).remove();
    } else {
        seen2[txt] = true;
    }
});
</script>

<script>
  function paid(i)
  {
    
    var cardno=$("#CardNo").val();
    var FineType=$("#FineType"+i).val();
    var MainAmount=$("#MainAmount"+i).val();
    var LastDate=$("#LastDate"+i).val();
    var Status=$("#paid"+i).val();

    localStorage.setItem("Card Number", cardno);
    localStorage.setItem("Fine Type", FineType);
    localStorage.setItem("Main Amount", MainAmount);
    localStorage.setItem("Last Date", LastDate);
    localStorage.setItem("Status", Status);

    // if(document.getElementById("paid")==Paid)
    // {
    //   document.getElementById("paid").disabled = true;
    // }
    
    window.open("student_fine_report.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=470,height=269");
    //   document.getElementById("paid").value="Paid";
  }
</script>


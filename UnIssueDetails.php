<thead class="table-dark" style="text-align: center;">
              <tr>
                <th>Branch</th>
                <th><u>No. Of All Fine Paid Students</u><br>Total No. Of Students<br>(In 8th Semester)</th>
              </tr>
            </thead>
            <tbody class="table table-light">
              <tr>
                <td>Computer Science & Engineering</td>
                <td>
                  <?php
                    $con=mysqli_connect('localhost','root','','Minor-Project(FIne Alert System)');
                    $q="select * from student where Branch='Computer Science & Engineering' and Semester='8'";
                    $rs=mysqli_query($con,$q);
                    $total_count=0;

                    while($row=mysqli_fetch_array($rs))
                    {
                      $total_count=$total_count+1;
                    }

                    $q1="select Distinct CardNo from fine where Branch='Computer Science & Engineering' and Semester='8' and Status='Paid'";
                    $rs1=mysqli_query($con,$q1);
                    $Paid_count=$total_count;

                    while($row1=mysqli_fetch_array($rs1))
                    {
                      $Paid_count=$Paid_count;
                    }

                    $q2="select Distinct CardNo from fine where Branch='Computer Science & Engineering' and Semester='8' and Status='Un-Paid'";
                    $rs2=mysqli_query($con,$q2);

                    while($row2=mysqli_fetch_array($rs2))
                    {
                      $Paid_count=$Paid_count-1;
                    }
                    echo "<p>$Paid_count/$total_count</p>";
                  ?>
                </td>
              </tr>
              <tr>
                <td>Electronics and Tele-Communication</td>
                <td>
                  <?php
                    $con=mysqli_connect('localhost','root','','Minor-Project(FIne Alert System)');
                    $q="select * from student where Branch='Electronics and Tele-Communication' and Semester='8'";
                    $rs=mysqli_query($con,$q);
                    $total_count=0;

                    while($row=mysqli_fetch_array($rs))
                    {
                      $total_count=$total_count+1;
                    }

                    $q1="select Distinct CardNo from fine where Branch='Electronics and Tele-Communication' and Semester='8' and Status='Paid'";
                    $rs1=mysqli_query($con,$q1);
                    $Paid_count=$total_count;

                    while($row1=mysqli_fetch_array($rs1))
                    {
                      $Paid_count=$Paid_count;
                    }

                    $q2="select Distinct CardNo from fine where Branch='Electronics and Tele-Communication' and Semester='8' and Status='Un-Paid'";
                    $rs2=mysqli_query($con,$q2);

                    while($row2=mysqli_fetch_array($rs2))
                    {
                      $Paid_count=$Paid_count-1;
                    }
                    echo "<p>$Paid_count/$total_count</p>";
                  ?>
                </td>
              </tr>
              <tr>
                <td>Information Technology</td>
                <td>
                  <?php
                    $con=mysqli_connect('localhost','root','','Minor-Project(FIne Alert System)');
                    $q="select * from student where Branch='Information Technology' and Semester='8'";
                    $rs=mysqli_query($con,$q);
                    $total_count=0;

                    while($row=mysqli_fetch_array($rs))
                    {
                      $total_count=$total_count+1;
                    }

                    $q1="select Distinct CardNo from fine where Branch='Information Technology' and Semester='8' and Status='Paid'";
                    $rs1=mysqli_query($con,$q1);
                    $Paid_count=$total_count;

                    while($row1=mysqli_fetch_array($rs1))
                    {
                      $Paid_count=$Paid_count;
                    }

                    $q2="select Distinct CardNo from fine where Branch='Information Technology' and Semester='8' and Status='Un-Paid'";
                    $rs2=mysqli_query($con,$q2);

                    while($row2=mysqli_fetch_array($rs2))
                    {
                      $Paid_count=$Paid_count-1;
                    }
                    echo "<p>$Paid_count/$total_count</p>";
                  ?>
                </td>
              </tr>
              <tr>
                <td>Electrical and Electronics Engineering</td>
                <td>
                  <?php
                    $con=mysqli_connect('localhost','root','','Minor-Project(FIne Alert System)');
                    $q="select * from student where Branch='Electrical and Electronics Engineering' and Semester='8'";
                    $rs=mysqli_query($con,$q);
                    $total_count=0;

                    while($row=mysqli_fetch_array($rs))
                    {
                      $total_count=$total_count+1;
                    }

                    $q1="select Distinct CardNo from fine where Branch='Electrical and Electronics Engineering' and Semester='8' and Status='Paid'";
                    $rs1=mysqli_query($con,$q1);
                    $Paid_count=$total_count;

                    while($row1=mysqli_fetch_array($rs1))
                    {
                      $Paid_count=$Paid_count;
                    }

                    $q2="select Distinct CardNo from fine where Branch='Electrical and Electronics Engineering' and Semester='8' and Status='Un-Paid'";
                    $rs2=mysqli_query($con,$q2);

                    while($row2=mysqli_fetch_array($rs2))
                    {
                      $Paid_count=$Paid_count-1;
                    }
                    echo "<p>$Paid_count/$total_count</p>";
                  ?>
                </td>
              </tr>
              <tr>
                <td>Electrical Engineering</td>
                <td>
                  <?php
                    $con=mysqli_connect('localhost','root','','Minor-Project(FIne Alert System)');
                    $q="select * from student where Branch='Electrical Engineering' and Semester='8'";
                    $rs=mysqli_query($con,$q);
                    $total_count=0;

                    while($row=mysqli_fetch_array($rs))
                    {
                      $total_count=$total_count+1;
                    }

                    $q1="select Distinct CardNo from fine where Branch='Electrical Engineering' and Semester='8' and Status='Paid'";
                    $rs1=mysqli_query($con,$q1);
                    $Paid_count=$total_count;

                    while($row1=mysqli_fetch_array($rs1))
                    {
                      $Paid_count=$Paid_count;
                    }

                    $q2="select Distinct CardNo from fine where Branch='Electrical Engineering' and Semester='8' and Status='Un-Paid'";
                    $rs2=mysqli_query($con,$q2);

                    while($row2=mysqli_fetch_array($rs2))
                    {
                      $Paid_count=$Paid_count-1;
                    }
                    echo "<p>$Paid_count/$total_count</p>";
                  ?>
                </td>
              </tr>
              <tr>
                <td>Civil Engineering</td>
                <td>
                  <?php
                    $con=mysqli_connect('localhost','root','','Minor-Project(FIne Alert System)');
                    $q="select * from student where Branch='Civil Engineering' and Semester='8'";
                    $rs=mysqli_query($con,$q);
                    $total_count=0;

                    while($row=mysqli_fetch_array($rs))
                    {
                      $total_count=$total_count+1;
                    }

                    $q1="select Distinct CardNo from fine where Branch='Civil Engineering' and Semester='8' and Status='Paid'";
                    $rs1=mysqli_query($con,$q1);
                    $Paid_count=$total_count;

                    while($row1=mysqli_fetch_array($rs1))
                    {
                      $Paid_count=$Paid_count;
                    }

                    $q2="select Distinct CardNo from fine where Branch='Civil Engineering' and Semester='8' and Status='Un-Paid'";
                    $rs2=mysqli_query($con,$q2);

                    while($row2=mysqli_fetch_array($rs2))
                    {
                      $Paid_count=$Paid_count-1;
                    }
                    echo "<p>$Paid_count/$total_count</p>";
                  ?>
                </td>
              </tr>
              <tr>
                <td>Mechanical Engineering</td>
                <td>
                  <?php
                    $con=mysqli_connect('localhost','root','','Minor-Project(FIne Alert System)');
                    $q="select * from student where Branch='Mechanical Engineering' and Semester='8'";
                    $rs=mysqli_query($con,$q);
                    $total_count=0;

                    while($row=mysqli_fetch_array($rs))
                    {
                      $total_count=$total_count+1;
                    }

                    $q1="select Distinct CardNo from fine where Branch='Mechanical Engineering' and Semester='8' and Status='Paid'";
                    $rs1=mysqli_query($con,$q1);
                    $Paid_count=$total_count;

                    while($row1=mysqli_fetch_array($rs1))
                    {
                      $Paid_count=$Paid_count;
                    }

                    $q2="select Distinct CardNo from fine where Branch='Mechanical Engineering' and Semester='8' and Status='Un-Paid'";
                    $rs2=mysqli_query($con,$q2);

                    while($row2=mysqli_fetch_array($rs2))
                    {
                      $Paid_count=$Paid_count-1;
                    }
                    echo "<p>$Paid_count/$total_count</p>";
                  ?>
                </td>
              </tr>
            </tbody>